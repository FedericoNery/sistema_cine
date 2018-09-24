<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ControladorDeSala extends Controller
{
    public function index(){
    	$usuarios = DB::table('salas');
    }

    public function devolverFormularioNuevaSala(){
    	return view('nuevaSala');
    }


    public function guardarNuevaSala(){
    	$data = request()->all();
    	Sala::create([
    		'cantidad_butacas' => $data['cantidad_butacas'],
    		'precio' => $data['precio']
    		

    	]);
    }
}
