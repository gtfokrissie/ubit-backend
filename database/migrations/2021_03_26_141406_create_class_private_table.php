<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassPrivateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_private', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('class_name');
            $table->string('slug');
            $table->integer('price');
            $table->integer('meet');
            $table->boolean('status');
            
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
        Schema::dropIfExists('class_private');
    }
}
