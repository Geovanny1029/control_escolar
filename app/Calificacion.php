<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
	protected $table = "calificaciones";

	protected $fillable= [
   		'id',
   		'id_alumno',
   		'C1',
   		'C2',
   		'C3',
   		'C4',
   		'promedio',   
   	];

    public function relacioncontrol(){

        return $this->hasMany('App\RelacionControl'); 
    }

    public function user2(){

        return $this->belongsTo('App\User','id_alumno'); 
    }
}
