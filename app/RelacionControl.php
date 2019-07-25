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

	public function asignatuta(){

        return $this->belongsTo('App\Asignatura','id_asignatura'); 
    }

    public function periodo(){

    	return $this->belongsTo('App\Periodo','id_perido'); 	
    }

    public function grupo(){

    	return $this->belongsTo('App\Grupo','id_grupo'); 
    }

    public function user(){
    	return $this->belongsTo('App\User','id_maestro'); 
    }

    public function user2(){
    	return $this->belongsTo('App\User','id_alumno'); 
    }
}
