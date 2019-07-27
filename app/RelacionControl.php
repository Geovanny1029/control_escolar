<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionControl extends Model
{
	protected $table = "relacion_control";

	protected $fillable= [
   		'id',
   		'id_grupo',
   		'id_asignatura',
   		'id_periodo',
   		'id_maestro',
   		'id_alumno',   
   	];

	public function asignaturar(){

        return $this->belongsTo('App\Asignatura','id_asignatura'); 
    }

    public function grupor(){

    	return $this->belongsTo('App\Grupo','id_grupo'); 
    }

   public function periodo1(){

      return $this->belongsTo('App\Periodo','id_periodo');   
    }

    public function userm(){
    	return $this->belongsTo('App\User','id_maestro'); 
    }

    public function useral(){
    	return $this->belongsTo('App\User','id_alumno'); 
    }
}
