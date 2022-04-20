<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Puppy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bread', 100);
        });
        Schema::create('puppy', function (Blueprint $table) {
            $table->increments('Pid');
            $table->string('name', 50);
            $table->boolean('gender');
            $table->string('area', 50);
            $table->integer('breedsID')->unsigned();
            $table->text('Detail');
            $table->longtext('image');
            $table->string('color', 50);
        });
        Schema::table('puppy', function (Blueprint $table) {
            $table->foreign('breedsID')->references('id')->on('breeds');
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('Cid');
            $table->string('customer_name', 50);
            $table->string('email');
            $table->string('address');
            $table->string('gender');
            $table->string('username')->unique();
            $table->string('password');
//            $table->integer('role');
            $table->rememberToken();
        });
//        Schema::create('admin', function (Blueprint $table) {
//            $table->increments('Aid');
//            $table->string('name', 50);
//            $table->string('email');
//            $table->string('phone');
//            $table->string('gender');
//            $table->string('username')->unique();
//            $table->string('password');
//            $table->rememberToken();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puppy');
    }
}
