<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Palabras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dificultad', function (Blueprint $table){
            $table->increments('id');
            $table->string('dificultad');
        }
    );

        Schema::create('palabras', function (Blueprint $table){
            $table->increments('id');
            $table->string('palabra');
            $table->integer('dificultad')->unsigned(); //el nombre de la tabla fue cambiado en un migracion a 'dificultad_id'
            $table->foreign('dificultad')->references('id')->on('dificultad');

        }
    );
        //
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
