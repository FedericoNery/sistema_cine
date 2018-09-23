<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	public $timestamps = false;
	
    protected $fillable = [
    	'nombre','apellido','email','telefono','fecha_de_nacimiento',
    	'contrasenia'
    ];

    protected $hidden = [
    	'contrasenia','remember_token'
    ];

}
