<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    //
    Public function index(Request $request){
        $alumnos = Alumno::where('dificultad_id', '=', $request->nivel)
        ->get();
        return $alumnos;
    }

    Public function create(){
        return view('Alumno.create');
    }
}
