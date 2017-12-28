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



#Añadir Marca , Código de Marca y fabricante a los select de la tabla T5 = Marcas

Route::get('/bitacora', 'controladorBitacora@enviarVariable');

//RUTA DE SELECT MULTIPLES visRegmarcas aqui se captura el id del modelo sel_marca1 y sel_marca2 a traves de la función denCoMarcas, nomFabricante

//Route::get('denCoMarcas/{id}','controladorRegMarca@getMarcas');
//Route::get('nomFabricante/{id}','controladorRegMarca@getFabri');

// ANEXOS DE REGISTROS 

//ANEXO T1 = proveedores
Route::get('/proveedores', 'controladorProveedores@index');
Route::resource('proveedores', 'controladorProveedores');

//ANEXO T2 = concurso
Route::get('/concurso', 'controladorConcurso@index');
Route::resource('concurso', 'controladorConcurso');

//ANEXO T2-1 = directa
Route::get('/directa', 'controladorDirecta@index');
Route::resource('directa', 'controladorDirecta');

//ANEXO T2-2 = confiscacion
Route::get('/confiscacion', 'controladorConfiscacion@index');
Route::resource('confiscacion', 'controladorConfiscacion');

//ANEXO T2-3 = dacion
Route::get('/dacion', 'controladorDacion@index');
Route::resource('dacion', 'controladorDacion');

//ANEXO T2-4 = donacion
Route::get('/donacion', 'controladorDonacion@index');
Route::resource('donacion', 'controladorDonacion');

//ANEXO T2-5 = expropiacion
Route::get('/expropiacion', 'controladorExpropiacion@index');
Route::resource('expropiacion', 'controladorExpropiacion');

//ANEXO T2-6 = permuta
Route::get('/permuta', 'controladorPermuta@index');
Route::resource('permuta', 'controladorPermuta');

//ANEXO T2-7 = transferencia
Route::get('/transferencia', 'controladorTransferencia@index');
Route::resource('transferencia', 'controladorTransferencia');

//ANEXO T2-8 = adjudicacion
Route::get('/adjudicacion', 'controladorAdjudicacion@index');
Route::resource('adjudicacion', 'controladorAdjudicacion');

//ANEXO T3 = seguros
Route::get('/seguros', 'controladorSeguros@index');
Route::resource('seguros', 'controladorSeguros');

//ANEXO T4 = responsables
Route::get('/responsables', 'controladorResponsables@index');
Route::resource('responsables', 'controladorResponsables');


#ANEXO T5 = Ruta marcaAdd para acceder a la vista añadir una marca nueva y ruta selMarca para guardar datos de dicha vista
Route::get('/marcas', 'controladorAddMarca@index');
Route::post('marcas', 'controladorAddMarca@store');

#ANEXO T6 = modelos
Route::get('/modelos', 'controladorAddModelos@index');
Route::resource('modelos', 'controladorAddModelos');

#ANEXO T7 = Componentes
Route::get('/componentes', 'controladorComponentes@index');
Route::resource('componentes', 'controladorComponentes');

#ANEXO T8 = bienes
Route::get('/bienes', 'controladorBienes@index');
Route::resource('bienes', 'controladorBienes');

#SELECT DINAMICOS
Route::get('dropdown/{id}','controladorBienes@getBienes');
#VISTAS DE MUESTRA REGISTROS DATATABLE registroT./En: VIEWS OF SAMPLE REGISTERS DATATABLE REGISTRY

Route::get('/regProveedores', 'con_proveedoresVer@index');
Route::get('/regConcurso', 'con_concursoVer@index');
Route::get('/regDirecta', 'con_directaVer@index');
Route::get('/regConfiscacion', 'con_confiscacionVer@index');
Route::get('/regDacion', 'con_dacionVer@index');
Route::get('/regDonacion', 'con_donacionVer@index');
Route::get('/regExpropiacion', 'con_expropiacionVer@index');
Route::get('/regPermuta', 'con_permutaVer@index');
Route::get('/regTransferencia', 'con_transferenciaVer@index');
Route::get('/regAdjudicacion', 'con_adjudicacionVer@index');
Route::get('/regSeguros', 'con_segurosVer@index');
Route::get('/regResponsables', 'con_responsablesVer@index');
#MUESTRA REGISTRO DATATABLE DE LAS NUEVAS MARCAS AGREGADAS AL SELECT
Route::get('/histoMarcas', 'con_histoMarcas@index');
Route::get('/histoModelos', 'con_histoModelos@index');
Route::get('/regComponentes', 'con_componentesVer@index');
Route::get('/regBienes', 'con_bienesVer@index');

#FUNCION DE REVISADO FUNCIÓN selectId => controladorVerT./En: REVISED FUNCTION FUNCTION selectId => VT controller

Route::get('seleccionProveedores/{id}', 'con_proveedoresVer@selectId');
Route::get('seleccionConcurso/{id}', 'con_concursoVer@selectId');
Route::get('seleccionDirecta/{id}', 'con_directaVer@idDirecta');
Route::get('seleccionConfiscacion/{id}', 'con_confiscacionVer@selectId');
Route::get('seleccionDacion/{id}', 'con_dacionVer@selectId');
Route::get('seleccionDonacion/{id}', 'con_donacionVer@selectId');
Route::get('seleccionExpropiacion/{id}', 'con_expropiacionVer@selectId');
Route::get('seleccionPermuta/{id}', 'con_permutaVer@selectId');
Route::get('seleccionTransferencia/{id}', 'con_transferenciaVer@selectId');
Route::get('seleccionAdjudicacion/{id}', 'con_adjudicacionVer@selectId');
Route::get('seleccionSeguros/{id}', 'con_segurosVer@selectId');
Route::get('seleccionResponsables/{id}', 'con_responsablesVer@selectId');
Route::get('seleccionMarcas/{id}', 'con_histoMarcas@selectId');
Route::get('seleccionModelos/{id}', 'con_histoModelos@selectId');
Route::get('seleccionComponentes/{id}', 'con_componentesVer@selectId');
Route::get('seleccionBienes/{id}', 'con_bienesVer@idBienes');


#ELIMINAR REGISTRO DE TABLAS FUNCIÓN anulart =>controladorVer...
Route::get('/anularProvee/{id}', 'con_proveedoresVer@anularProvee');
Route::get('/anularConcur/{id}', 'con_concursoVer@anularConcur');
Route::get('/anularDirec/{id}', 'con_directaVer@anularDirec');
Route::get('/anularConfis/{id}', 'con_confiscacionVer@anularConfis');
Route::get('/anularDacion/{id}', 'con_dacionVer@anularDacion');
Route::get('/anularDonac/{id}', 'con_donacionVer@anularDonac');
Route::get('/anularExpro/{id}', 'con_expropiacionVer@anularExpro');
Route::get('/anularPermu/{id}', 'con_permutaVer@anularPermu');
Route::get('/anularTrans/{id}', 'con_transferenciaVer@anularTrans');
Route::get('/anularSegu/{id}', 'con_segurosVer@anularSegu');
Route::get('/anularRespon/{id}', 'con_responsablesVer@anularRespon');
Route::get('/anularAdjud/{id}', 'con_adjudicacionVer@anularAdjud');
Route::get('/anularMarca/{id}', 'con_histoMarcas@anularMarca');
Route::get('/anularModelo/{id}', 'con_histoModelos@anularModelo');
Route::get('/anularComponentes/{id}', 'con_componentesVer@anularComponentes');

	Route::get('/home', function () {
    return view('/home');
});
});

