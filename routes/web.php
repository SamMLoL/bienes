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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#CONTROLADOR DE TABLAS y RUTAS DE VISTAS FORMULARIOS

Route::get('/tablat1', 'controladorT1@index');
Route::resource('t1', 'controladorT1');

Route::get('/tablat2', 'controladorT2@index');
Route::resource('t2', 'controladorT2');

Route::get('/tablat3', 'controladorT3@index');

Route::get('/tablat4', 'controladorT4@index');



#VISTAS DE MUESTRA REGISTROS DATATABLE registroT...
Route::get('/registroT1', 'controladorVerT1@index');
Route::get('/registroT2', 'controladorVerT2@index');

#FUNCION DE REVISADO
Route::get('seleccion/{id}', 'controladorVerT1@selectId');
Route::get('seleccion2/{id}', 'controladorVerT2@selectId');

#ELIMINAR REGISTRO DE TABLAS

Route::get('/anulart1/{id}', 'controladorVerT1@anularT1');
Route::get('/anulart2/{id}', 'controladorVerT2@anularT2');




