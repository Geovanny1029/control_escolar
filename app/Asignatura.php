<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
	protected $table = "asignaturas";

	protected $fillable= [
   		'id',
   		'nombre',
   		'estatus',   
   	];

    public function relacioncontrol(){

        return $this->hasMany('App\RelacionControl'); 
    }

   	public function estatusa(){

        return $this->belongsTo('App\Estatus','estatus'); 
    }
}
