<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alteralumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('alumnos', function (Blueprint $table){
            $table->integer('dificultad_id')->unsigned();
            $table->foreign('dificultad_id')->references('id')->on('dificultad');
            $table->string('institucion');
        });
    }

    /**
     * Reverse the migrations.
     *work
     * @return void
     */
    public function down()
    {
        //
    }
}
