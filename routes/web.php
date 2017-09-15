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
    return view('auth.login');
}); 
Route::get('/login', function () {
    return view('auth.login');
});


#SEGURIDAD DEL MIDDLEWARE PARA LA URL ARCHIVOS QUE LO DOMINAN: /En: MIDDLEWARE SECURITY FOR THE URL DOMAIN FILE: 

#middlewareSesion.php/kernel.php/controladorLogin /En: middlewareSesion.php / kernel.php / controllerLogin

Route::post('/sesion', 'controladorLogin@login');

Route::get('/logout', 'controladorLogin@logout');

session_start();

Route::group(['middleware' => 'sesion'], function () {

#CONTROLADOR DE TABLAS y RUTAS DE VISTAS FORMULARIOS /En: TABLET CONTROLLER AND VIEW ROUTES FORMS

Route::get('/marcas', 'controladorMarcas@index');
Route::resource('tMarca', 'controladorMarcas');

//RUTA DE SELECT MULTIPLES CONTROLADORT5

Route::get('denCoMarcas/{id}','controladorT5@getMarcas');
Route::get('nomFabricante/{id}','controladorT5@getFabri');




Route::get('/tablat1', 'controladorT1@index');
Route::resource('t1', 'controladorT1');

Route::get('/tablat2', 'controladorT2@index');
Route::resource('t2', 'controladorT2');

Route::get('/tablat2-1', 'controladorT21@index');
Route::resource('t21', 'controladorT21');

Route::get('/tablat2-2', 'controladorT22@index');
Route::resource('t22', 'controladorT22');

Route::get('/tablat2-3', 'controladorT23@index');
Route::resource('t23', 'controladorT23');

Route::get('/tablat2-4', 'controladorT24@index');
Route::resource('t24', 'controladorT24');

Route::get('/tablat2-5', 'controladorT25@index');
Route::resource('t25', 'controladorT25');

Route::get('/tablat2-6', 'controladorT26@index');
Route::resource('t26', 'controladorT26');

Route::get('/tablat2-7', 'controladorT27@index');
Route::resource('t27', 'controladorT27');

Route::get('/tablat2-8', 'controladorT28@index');
Route::resource('t28', 'controladorT28');

Route::get('/tablat3', 'controladorT3@index');
Route::resource('t3', 'controladorT3');

Route::get('/tablat4', 'controladorT4@index');
Route::resource('t4', 'controladorT4');

Route::get('/tablat5', 'controladorT5@index');
Route::resource('t5', 'controladorT5');


#VISTAS DE MUESTRA REGISTROS DATATABLE registroT./En: VIEWS OF SAMPLE REGISTERS DATATABLE REGISTRY

Route::get('/registroT1', 'controladorVerT1@index');
Route::get('/registroT2', 'controladorVerT2@index');
Route::get('/registroT2-1', 'controladorVerT21@index');
Route::get('/registroT2-2', 'controladorVerT22@index');
Route::get('/registroT2-3', 'controladorVerT23@index');
Route::get('/registroT2-4', 'controladorVerT24@index');
Route::get('/registroT2-5', 'controladorVerT25@index');
Route::get('/registroT2-6', 'controladorVerT26@index');
Route::get('/registroT2-7', 'controladorVerT27@index');
Route::get('/registroT2-8', 'controladorVerT28@index');
Route::get('/registroT3', 'controladorVerT3@index');
Route::get('/registroT4', 'controladorVerT4@index');
Route::get('/registroT5', 'controladorVerT5@index');

#FUNCION DE REVISADO FUNCIÓN selectId => controladorVerT./En: REVISED FUNCTION FUNCTION selectId => VT controller

Route::get('seleccion/{id}', 'controladorVerT1@selectId');
Route::get('seleccion2/{id}', 'controladorVerT2@selectId');
Route::get('seleccion21/{id}', 'controladorVerT21@selectId21');
Route::get('seleccion22/{id}', 'controladorVerT22@selectId22');
Route::get('seleccion23/{id}', 'controladorVerT23@selectId23');
Route::get('seleccion24/{id}', 'controladorVerT24@selectId24');
Route::get('seleccion25/{id}', 'controladorVerT25@selectId25');
Route::get('seleccion26/{id}', 'controladorVerT26@selectId26');
Route::get('seleccion27/{id}', 'controladorVerT27@selectId27');
Route::get('seleccion28/{id}', 'controladorVerT28@selectId28');
Route::get('seleccion3/{id}', 'controladorVerT3@selectId3');
Route::get('seleccion4/{id}', 'controladorVerT4@selectId4');
Route::get('seleccion5/{id}', 'controladorVerT5@selectId5');

#ELIMINAR REGISTRO DE TABLAS FUNCIÓN anulart =>controladorVer...
Route::get('/anulart1/{id}', 'controladorVerT1@anularT1');
Route::get('/anulart2/{id}', 'controladorVerT2@anularT2');
Route::get('/anulart21/{id}', 'controladorVerT21@anularT21');
Route::get('/anulart22/{id}', 'controladorVerT22@anularT22');
Route::get('/anulart23/{id}', 'controladorVerT23@anularT23');
Route::get('/anulart24/{id}', 'controladorVerT24@anularT24');
Route::get('/anulart25/{id}', 'controladorVerT25@anularT25');
Route::get('/anulart26/{id}', 'controladorVerT26@anularT26');
Route::get('/anulart27/{id}', 'controladorVerT27@anularT27');
Route::get('/anulart28/{id}', 'controladorVerT28@anularT28');
Route::get('/anulart3/{id}', 'controladorVerT3@anularT3');
Route::get('/anulart4/{id}', 'controladorVerT4@anularT4');
Route::get('/anulart5/{id}', 'controladorVerT5@anularT5');

	Route::get('/home', function () {
    return view('/home');
});
});

