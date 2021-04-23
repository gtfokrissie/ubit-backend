<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleVisualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_visual', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('article_id');
            $table->boolean('visual');
            $table->string('link_visual');
            $table->string('title')->nullable();
            $table->integer('number');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_visual');
    }
}
