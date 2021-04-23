<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassOfflineOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_offline_order_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_offline_order_id');
            $table->integer('class_offline_id');
            $table->integer('total_student');
            $table->dateTime('date_visit');
            $table->integer('total');
            
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
        Schema::dropIfExists('class_offline_order_detail');
    }
}
