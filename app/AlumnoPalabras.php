<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoPalabras extends Model
{
  protected $with = ['palabra', 'alumno'];

  public function palabra()
  {
      //return $this->belongsTo('App\Dificultad', 'id', 'dificultad_id');
      return $this->belongsTo(Palabra::class, 'palabra');
  }

  

  public function alumno(){
  	return $this->belongsTo(Alumno::class, 'alumno');
  }

  //public function almunno(){
  //  <return $this->blengsTo(Alumno::class, 'alumno');
  //}
}
