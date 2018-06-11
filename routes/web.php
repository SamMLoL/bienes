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

Route::get('/prueba', 'controladorPrueba@index');


session_start();

Route::group(['middleware' => 'sesion'], function () {

#CONTROLADOR DE TABLAS y RUTAS DE VISTAS FORMULARIOS /En: TABLET CONTROLLER AND VIEW ROUTES FORMS



#Añadir Marca , Código de Marca y fabricante a los select de la tabla T5 = Marcas


	Route::get('/home', function () {
    return view('/home');
});
});

