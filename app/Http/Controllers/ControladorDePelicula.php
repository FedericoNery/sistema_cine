<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ControladorDePelicula extends Controller
{
    public function index(){
    	$usuarios = DB::table('peliculas');
    }

    public function devolverFormularioNuevaPelicula(){
    	return view('registrarPelicula');
    }


    public function guardarNuevaPelicula(){
    	$data = request()->all();
    	Pelicula::create([
    		'nombre' => $data['nombre'],
    		'duracion' => $data['duracion'],
    		'sinopsis' => $data['sinopsis'],
    		'actores' => $data['actores'],
    		'fecha_de_estreno' => $data['fecha_de_estreno'],
    		'id_audio' => $data['id_audio'],
    		'id_subtitulos' => $data['id_subtitulos']

    	]);
    }
}
