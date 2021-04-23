<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sender_address_id');
            $table->integer('user_id');
            $table->string('order_id');
            $table->string('province');
            $table->string('city');
            $table->string('subdistrict');
            $table->string('address');
            $table->string('note')->nullable();
            $table->integer('shipping_charge');
            $table->integer('amount');
            $table->integer('weight');
            $table->integer('total');
            $table->string('no_resie')->nullable();
            $table->string('status');

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
        Schema::dropIfExists('product_order');
    }
}
