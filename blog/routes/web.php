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

Route::get('/', function () {  //ruta con vista
    return view('welcome');
});

Route::get('/estudiante', function () { 
	return "Hola estudiante";
});


//ruta de controlador

Route::get('/ListaEstudiantes','EstudiantesController@index'); 
Route::get('/NuevoEstudiante','EstudiantesController@create');

Route::get('/admin',function (){
	return view('admin.index');
});

//rutas put y patch son para actualizar

Route::get('/saludos/{nombre?}',function($nombre='Inserta tu nombre'){
	return 'Hola '.$nombre;
});

