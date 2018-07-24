<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    //
    Public function index(){
        $alumnos = Alumno::all();
        return $alumnos;
    }

    Public function create(){
        return view('Alumno.create');
    }
}
