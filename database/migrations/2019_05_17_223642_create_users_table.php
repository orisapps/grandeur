<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('fullname');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('refid');
            $table->string('gen01')->nullable();
            $table->string('gen02')->nullable();
            $table->string('gen03')->nullable();
            $table->string('gen04')->nullable();
            $table->string('gen05')->nullable();
            $table->string('password');
            $table->string('birthday');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('bank');
            $table->string('bankname');
            $table->string('banknumber');
            $table->integer('status')->nullable();
            $table->integer('emailv')->nullable();
            $table->string('vsent')->nullable();
            $table->string('vercode')->nullable();
            $table->string('secretcode')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
