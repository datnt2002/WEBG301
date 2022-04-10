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
            $table->increments('id');
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
