<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $timestamps = false;
	
    protected $fillable = [
    	'nombre','duracion','sinopsis',
    	'actores','fecha_de_estreno',
    	'id_audio','id_subtitulos'
    ];
}
