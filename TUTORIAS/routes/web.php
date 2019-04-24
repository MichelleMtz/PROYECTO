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
