<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Palabra extends Model
{

    protected $with = ['dificultad'];

    public function dificultad()
    {
        //return $this->belongsTo('App\Dificultad', 'id', 'dificultad_id');
        return $this->belongsTo(Dificultad::class);
    }

   /* protected $appends= ["difcultad"];

    public function getDificultadAttribute()
    {
        return $this->dificultad();
    }*/


}
