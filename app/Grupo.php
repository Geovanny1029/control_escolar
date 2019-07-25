<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
	protected $table = "grupos";

	protected $fillable= [
   		'id',
   		'nombre',
   		'estatus',   
   	];

    public function relacioncontrol(){

        return $this->hasMany('App\RelacionControl'); 
    }

   	public function estatus(){

        return $this->belongsTo('App\Estatus','estatus'); 
    }
}
