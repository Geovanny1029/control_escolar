<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'nombres','apellidos','usuario','password','backup_pass','nivel','estatus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function relacioncontrol(){

        return $this->hasMany('App\RelacionControl'); 
    }

    public function calificacion(){

        return $this->hasMany('App\Calificacion'); 
    }

        public function estatus1(){

        return $this->belongsTo('App\Estatus','estatus'); 
    }

        public function nivel1(){

        return $this->belongsTo('App\Nivel','nivel'); 
    }
}
