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

Route::get('/', function () {
    return view('index2');
});

Route::get('/atletas', function(){
	
	return view('atletas.CrearAtletas');
	
});

Route::get('/entrenadores', function(){
	
	return view('entrenadores.CrearEntrenadores');
	
});

Route::get('/evaluacionentrenadores', function(){
	
	return view('entrenadores.EvaluacionEntrenadores');

});

Route::get('/login', function () {
    return view('login');
});

Route::get('/deportes', function () {
    return view('deportes.deportes');
});
