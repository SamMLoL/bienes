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

#VISTAS FORMULARIOS 
Route::get('/t9ette', function () {
    return view('tablas/t9ette');
});

Route::get('/t1dpbpoe', function () {
    return view('tablas/t1dpbpoe');
});

Route::get('/t2dobmioe', function () {
    return view('tablas/t2dobmioe');
});

Route::get('/t3dsbmioe', function () {
    return view('tablas/t3dsbmioe');
});

Route::get('/t4drbmioe', function () {
    return view('tablas/t4drbmioe');
});

Route::get('/t5dmbmioe', function () {
    return view('tablas/t5dmbmioe');
});

Route::get('/t6dmbmioe', function () {
    return view('tablas/t6dmbmioe');
});

Route::get('/t7dtcbmioe', function () {
    return view('tablas/t7dtcbmioe');
});

Route::get('/registroSude', function () {
    return view('registros/registroSude');
});



