<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_online', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug');
            $table->string('link_intro');
            $table->integer('total_video');
            $table->integer('total_video_duration');
            $table->longText('description');
            $table->integer('price');
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
        Schema::dropIfExists('class_online');
    }
}
