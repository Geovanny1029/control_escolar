<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
	protected $table = "calificaciones";

	protected $fillable= [
   		'id',
   		'id_relacion',
   		'C1',
   		'C2',
   		'C3',
   		'C4',
   		'promedio',   
   	];

    public function relacioncontrol(){

      return $this->belongsTo('App\RelacionControl','id_relacion'); 
    
    }


}
