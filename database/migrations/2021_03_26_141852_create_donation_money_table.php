<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_money', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('email')->nullable();

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
        Schema::dropIfExists('donation_money');
    }
}
