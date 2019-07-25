<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
	protected $table = "estatus";

	protected $fillable= [
   		'id',
   		'estatus',   
   	];

    public function user(){

        return $this->hasMany('App\user'); 
    }

    public function asignatura(){

        return $this->hasMany('App\Asignatura'); 
    }

    public function grupo(){

        return $this->hasMany('App\Grupo'); 
    }

    public function periodo(){

        return $this->hasMany('App\Periodo'); 
    }
}
