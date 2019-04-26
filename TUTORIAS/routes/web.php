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
    return view('layout.layout');
});

Route::resource('Tutor','TutorController');
Route::resource('TutorPerfil','TutorPerfilController');
Route::resource('TutorTutorados','TutorTutoradosController');
Route::resource('TutorReportes','TutorReportesController');

Route::resource('Login','LoginController');

Route::prefix('CoordinadorG')->group(function () {
    Route::resources([
        'CategoriaPregunta'=>'CategoriaPreguntaController',
        '/'=>'CoordinadorGeneralController',

    ]);

});

Route::prefix('Jefes')->group(function () {
    Route::resources([
        'estadisticas'=>'EstadisticasController',
        'tutores-coordinador'=>'TutoresCoordinadoresController',
        'reportes'=>'ReportesController',
        '/'=>'JefeLayoutController',
        'personales'=>'PersonalesController',
    ]);

});

Route::prefix('Administrador')->group(function () {
    Route::resources([
        'carreras'=>'CarrerasController',
        'periodos'=>'PeriodosController',
        '/'=>'AdministradorLayoutController',
        'puestos'=>'PuestosController',
    ]);

});



/*Route::resource('Jefe-tutores-coordinador','TutoresCoordinadoresController');*/


/*Route::resource('Administrador','AdministradorLayoutController');
Route::resource('Administrador-carreras','CarrerasController');
Route::resource('Administrador-periodos','PeriodosController');
Route::resource('Administrador-puestos','PuestosController');*/