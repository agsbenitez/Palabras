<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('palabras', function (){
    return view('palabra');

});

Route::get('concurso', function(){
  return view('concurso');
});
Route::get('tb', function(){
  return view('tablas');
});


Route::resource('sort', 'AlumnoPalanbrasController', ['except' => 'create']);
Route::resource('play', 'AlumnoPalanbrasController');

Route::get('alumnos', 'AlumnosController@index');
Route::get('alumnos/create', 'AlumnosController@create');
Route::get('dificultad', 'DificultadController@dificultad');
Route::get('palabrasRandom', 'PalabrasController@palabrasRandom');
