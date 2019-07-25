<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
	protected $table = "nivel";

	protected $fillable= [
   		'id',
   		'nombre_nivel',   
   	];

    public function user(){

        return $this->hasMany('App\User'); 
    }
}
