<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('organizer');
            $table->string('image');
            $table->date('date');
            $table->dateTime('time_from');
            $table->dateTime('time_until');
            $table->string('location');
            $table->string('address');
            $table->longText('description');
            $table->integer('price');
            $table->boolean('status');
            $table->string('link_registration');
            $table->integer('user_id');
            
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
        Schema::dropIfExists('event');
    }
}
