<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassOnlineDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_online_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_online_id');
            $table->integer('number');
            $table->string('name_in_tab');
            $table->string('link_video');
            $table->string('title_video');
            $table->string('short_description')->nullable();
            $table->integer('video_duration')->nullable();

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
        Schema::dropIfExists('class_online_detail');
    }
}
