<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ControladorDelUsuario extends Controller
{
    public function index(){
    	$usuarios = DB::table('usuarios');
    }

    public function devolverFormularioNuevoUsuario(){
    	return view('nuevoUsuario');
    }


    public function guardarNuevoUsuario(){
    	/*$data = request()->validate(
    	[ 
    		'nombre' => 'required',
    		'apellido' => 'required',
    		'email' => ['required','email','unique:usuarios,email'],
    		'telefono' => 'required',
    		'fecha_de_nacimiento' => 'required',
    		'contrasenia' => 'required'
    	]
    	);*/

    	$data = request()->all();
    	Usuario::create([
    		'nombre' => $data['nombre'],
    		'apellido' => $data['apellido'],
    		'email' => $data['email'],
    		'telefono' => $data['telefono'],
    		'fecha_de_nacimiento' => $data['fecha_de_nacimiento'],
    		'contrasenia' => bcrypt($data['contrasenia'])

    	]);


    	
    }


}
