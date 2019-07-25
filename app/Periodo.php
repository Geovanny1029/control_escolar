<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
	protected $table = "periodos";

	protected $fillable= [
   		'id',
   		'periodo',
   		'estatus',   
   	];

    public function relacioncontrol(){

        return $this->hasMany('App\RelacionControl'); 
    }

   	public function estatus(){

        return $this->belongsTo('App\Estatus','estatus'); 
    }
}
