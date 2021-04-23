<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassOfflineOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_offline_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('order_id');
            $table->integer('total');
            $table->dateTime('date_order');
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
        Schema::dropIfExists('class_offline_order');
    }
}
