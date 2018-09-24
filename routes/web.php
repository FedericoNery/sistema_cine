<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Pagina de Inicio
Route::get('/', function () {
    return view('paginaDeInicio');
});


//Alta de Usuario
Route::get('/usuarios/nuevo', 'ControladorDelUsuario@devolverFormularioNuevoUsuario');
Route::post('usuarios/crear','ControladorDelUsuario@guardarNuevoUsuario');

//Baja de Usuario
Route::get('/usuarios/eliminar', function () {
    return view('eliminarUsuario');
});

//Modificar de Usuario
Route::get('/usuarios/modificar', function () {
    return view('modificarUsuario');
});


//Alta de Pelicula
Route::get('peliculas/nueva','ControladorDePelicula@devolverFormularioNuevaPelicula');
Route::post('peliculas/registrar','ControladorDePelicula@guardarNuevaPelicula');

//Baja de Pelicula

//Modificar de Pelicula

//Alta de Sala
Route::get('salas/nueva','ControladorDeSala@devolverFormularioNuevaSala');
Route::post('salas/registrar','ControladorDeSala@guardarNuevaSala');
//Baja de Sala

//Modificar de Sala


