<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGen3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gen3s', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->string('fullname');
          $table->string('refid');
          $table->string('point');
          $table->string('username')->unique();
          $table->string('gender');
          $table->string('status');
          $table->string('action');
          $table->string('mobile');
          $table->string('country');
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
        Schema::dropIfExists('gen3s');
    }
}
