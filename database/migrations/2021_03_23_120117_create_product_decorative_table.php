<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDecorativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_decorative', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_variant_id');
            $table->string('name');
            $table->string('slug');
            $table->integer('number');
            $table->integer('price');
            $table->integer('stock')->nullable();
            $table->integer('weight');
            $table->boolean('pre_order');
            $table->integer('pre_order_time')->nullable();
            $table->longText('description');

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
        Schema::dropIfExists('product_decorative');
    }
}
