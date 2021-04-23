<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenderAddresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sender_addres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('province');
            $table->string('province_code');
            $table->string('city');
            $table->string('city_code');
            $table->string('subdistrict');
            $table->string('subdistrict_code');
            $table->string('address');
            
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
        Schema::dropIfExists('sender_addres');
    }
}
