<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dificultad;

class DificultadController extends Controller
{
    Public function dificultad(Request $request){

      $dificultad = Dificultad::all();

      return $dificultad;

    }
    //
}
