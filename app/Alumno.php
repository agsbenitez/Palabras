<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  protected $with = ['dificultad'];

  public function dificultad()
  {
      //return $this->belongsTo('App\Dificultad', 'id', 'dificultad_id');
      return $this->belongsTo(Dificultad::class);
  }
}
