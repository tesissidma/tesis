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


Route::get('/controldealbergues', function () {
    return view('tutorias.controldealbergues');
});

Route::get('/visitaestablecimientose', function () {
    return view('tutorias.visitaestablecimientose');
});


Route::get('/bajas', function () {
    return view('atletas.bajas');
});

Route::get('/tiposdedeportes', function () {
    return view('deportes.tiposdedeportes');
});


Route::get('/categorias', function () {
    return view('deportes.categorias');
});

Route::get('/pruebas', function () {
    return view('deportes.pruebas');
});


=======
Route::get('/evaluacionfuerzatecnica', function(){
	return view('metodologo.EvaluacionesFuerzaTecnica');
});

Route::get('/horariosentrenamiento', function(){
	return view('metodologo.HorariosEntrenamientos');
});

Route::get('/reportecaraterizacionfuerzatecnica', function(){
	return view('metodologo.ReporteCaracterizacionFuerzaTecnica');
});



?>
