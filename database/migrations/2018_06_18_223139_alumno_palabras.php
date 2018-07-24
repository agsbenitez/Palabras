<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumnoPalabras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_palabras', function (Blueprint $table){
          $table->increments('id');
          $table->integer('palabra')->unsigned();
          $table->foreign('palabra')->references('id')->on('palabras');
          $table->integer('alumno')->unsigned();
          $table->foreign('alumno')->references('id')->on('alumnos');
          $table->boolean('correcto')->nullable();
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
        Schema::drop('alumnopalabras');
    }
}
