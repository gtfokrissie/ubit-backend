<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->integer('user_level');
            $table->integer('user_account');
            $table->string('nik')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone');
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('job')->nullable();
            $table->string('job_location')->nullable();

            $table->longText('about_me')->nullable();
            $table->integer('access_premium')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
