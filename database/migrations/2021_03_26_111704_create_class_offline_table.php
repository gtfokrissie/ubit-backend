<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassOfflineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_offline', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('class_name');
            $table->string('slug');
            $table->integer('price');
            $table->string('location');
            $table->string('location_img')->nullable();
            $table->string('location_map');
            $table->integer('max_student')->nullable();
            $table->integer('long_study');
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
        Schema::dropIfExists('class_offline');
    }
}
