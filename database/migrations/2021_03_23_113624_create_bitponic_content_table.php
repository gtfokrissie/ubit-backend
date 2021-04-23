<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitponicContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitponic_content', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_category_id');
            $table->string('image');
            $table->string('icon');
            $table->string('short_content');
            $table->longText('content');

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
        Schema::dropIfExists('bitponic_content');
    }
}
