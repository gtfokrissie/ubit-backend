<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('promo_name');
            $table->string('promo_code');
            $table->integer('discount_type');
            $table->integer('discount_amount');
            $table->integer('discount_max')->nullable();
            $table->dateTime('active_from');
            $table->dateTime('active_until');

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
        Schema::dropIfExists('promo');
    }
}
