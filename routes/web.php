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

# ANEXOS DE REGISTROS 

#ANEXO T1 = proveedores
Route::get('/proveedores', 'controladorProveedores@index');
Route::resource('proveedores', 'controladorProveedores');

#ANEXO T2 = concurso
Route::get('/concurso', 'controladorConcurso@index');
Route::resource('concurso', 'controladorConcurso');

#ANEXO T2-1 = directa
Route::get('/directa', 'controladorDirecta@index');
Route::resource('directa', 'controladorDirecta');

#ANEXO T2-2 = confiscacion
Route::get('/confiscacion', 'controladorConfiscacion@index');
Route::resource('confiscacion', 'controladorConfiscacion');

#ANEXO T2-3 = dacion
Route::get('/dacion', 'controladorDacion@index');
Route::resource('dacion', 'controladorDacion');

#ANEXO T2-4 = donacion
Route::get('/donacion', 'controladorDonacion@index');
Route::resource('donacion', 'controladorDonacion');

#ANEXO T2-5 = expropiacion
Route::get('/expropiacion', 'controladorExpropiacion@index');
Route::resource('expropiacion', 'controladorExpropiacion');

#ANEXO T2-6 = permuta
Route::get('/permuta', 'controladorPermuta@index');
Route::resource('permuta', 'controladorPermuta');

#ANEXO T2-7 = transferencia
Route::get('/transferencia', 'controladorTransferencia@index');
Route::resource('transferencia', 'controladorTransferencia');

#ANEXO T2-8 = adjudicacion
Route::get('/adjudicacion', 'controladorAdjudicacion@index');
Route::resource('adjudicacion', 'controladorAdjudicacion');

#ANEXO T3 = seguros
Route::get('/seguros', 'controladorSeguros@index');
Route::resource('seguros', 'controladorSeguros');

#ANEXO T4 = responsables
Route::get('/responsables', 'controladorResponsables@index');
Route::resource('responsables', 'controladorResponsables');


#ANEXO T5 = Marcas
Route::resource('marcas', 'controladorAddMarca');

#ANEXO T6 = Modelos
Route::get('/modelos', 'controladorAddModelos@index');
Route::resource('modelos', 'controladorAddModelos');

#ANEXO T7 = Componentes
Route::get('/componentes', 'controladorComponentes@index');
Route::resource('componentes', 'controladorComponentes');

#ANEXO T8 = Bienes
Route::get('/bienes', 'controladorBienes@index');
Route::resource('bienes', 'controladorBienes');

#ANEXO T9 = Equipo de Transporte
Route::get('/transporte', 'controladorEqtransporte@index');
Route::resource('transporte', 'controladorEqtransporte');

#ANEXO T10 = Semovientes
Route::get('/semovientes', 'controladorSemovientes@index');
Route::resource('semovientes', 'controladorSemovientes');

#ANEXO T11 = Datos de los Bienes
Route::get('/datosbienes', 'controladorDatosbienes@index');
Route::resource('datosbienes', 'controladorDatosbienes');

#ANEXO T12 = Datos de los Inmuebles
Route::get('/datosinmuebles', 'controladorInmuebles@index');
Route::resource('datosinmuebles', 'controladorInmuebles');

#SELECT DINAMICOS
Route::get('dropdown/{id}','controladorBienes@getBienes');


Route::get('dropdown2/{id}','controladorBienes@getBienesmodif');


#ANEXOS S

#ANEXO S1 = Datos Básicos
Route::get('/basicos', 'controladorS1@index');
Route::resource('basicos', 'controladorS1');

#ANEXO S2 = Datos Máxima Autoridad
Route::get('/maxima', 'controladorS2@index');
Route::resource('maxima', 'controladorS2');

#ANEXO S3 = Datos del Responsable Patrimonial
Route::get('/patrimonial', 'controladorS3@index');
Route::resource('patrimonial', 'controladorS3');

#ANEXO S4 = Datos de la sede
Route::get('/sedes', 'controladorS4@index');
Route::resource('sedes', 'controladorS4');

#SELECT LOCALIZACIÓN Y SELECT CODIGO DE PARROQUIA PARA CUANDO SELECCIONE INTERNACIONAL SE COLOQUE 99 EN CASO CONTRARIO TRAIGA LAS OPCIONES DEL OPTION(SELECT)

Route::get('s4Pais/', 'controladorS4@selectLocaPais');
#Modificar visSedes s4pais ruta
Route::get('s4Pais2/{id}', 'controladorS4@modifiLocaPais');

Route::get('s4Parro/', 'controladorS4@selectLocaParro');
#Modificar visSedes s4Parro ruta
Route::get('s4Parro2/{id}', 'controladorS4@modifiLocaParro');

Route::get('s4Ciudad/', 'controladorS4@selectLocaCiudad');
#Modificar visSedes s4Ciudad ruta
Route::get('s4Ciudad2/{id}', 'controladorS4@modifiLocaCiudad');

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
Route::get('/regTransporte', 'con_EqtransporteVer@index');
Route::get('/regSemovientes', 'con_semovientesVer@index');
Route::get('/regDatosbienes', 'con_datosbienesVer@index');
Route::get('/regInmuebles', 'con_inmueblesVer@index');
#MUESTRA REGISTRO DE LOS ANEXOS S
Route::get('/regBasicos', 'con_s1Ver@index');
Route::get('/regMaxima', 'con_s2Ver@index');
Route::get('/regPatrimonial', 'con_s3Ver@index');
Route::get('/regSedes', 'con_s4Ver@index');

#AÑADIR 
Route::get('/histoPaises', 'con_histoPaises@index');
Route::get('/histoParroquia', 'con_histoParro@index');
Route::get('/histoCiudad', 'con_histoCiudad@index');


#FUNCION DE REVISADO FUNCIÓN selectId => con_VerT./En: REVISED FUNCTION FUNCTION selectId => VT controller

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
Route::get('seleccionEqtransporte/{id}', 'con_EqtransporteVer@selectId');
Route::get('seleccionSemovientes/{id}', 'con_semovientesVer@selectId');
Route::get('seleccionDatosbien/{id}', 'con_datosbienesVer@selectId');
Route::get('seleccionInmuebles/{id}', 'con_inmueblesVer@selectId');

#FUNCIÓN DE REVISADO DE ANEXOS S selectId con_sN°Ver 
Route::get('seleccionBasicos/{id}', 'con_s1Ver@selectId');
Route::get('seleccionMaxima/{id}', 'con_s2Ver@selectId');
Route::get('seleccionPatrimonial/{id}', 'con_s3Ver@selectId');
Route::get('seleccionSedes/{id}', 'con_s4Ver@selectId');

#AÑADIR PAISES
Route::get('seleccionPaises/{id}', 'con_histoPaises@selectId');
Route::get('seleccionParroquia/{id}', 'con_histoParro@selectId');
Route::get('seleccionCiudad/{id}', 'con_histoCiudad@selectId');



#ELIMINAR REGISTRO DE TABLAS DE ANEXOS T =>con_Ver...
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
Route::get('/anularBienes/{id}', 'con_bienesVer@anularBienes');
Route::get('/anularEqtransporte/{id}', 'con_EqtransporteVer@anularTransporte');
Route::get('/anularSemo/{id}', 'con_semovientesVer@anularSemo');
Route::get('/anularDatos/{id}', 'con_datosbienesVer@anularDatos');
#ELIMINAR REGISTRO DE TABLAS DE ANEXOS S =>con_Ver...
Route::get('/anularBasicos/{id}', 'con_s1Ver@anularBasicos');
Route::get('/anularMaxima/{id}', 'con_s2Ver@anularMaxima');
Route::get('/anularPatrimonial/{id}', 'con_s3Ver@anularPatrimonial');

#ELIMINAR PAISES
Route::get('/anularPaises/{id}', 'con_histoPaises@anularPaises');
Route::get('/anularParroquia/{id}', 'con_histoParro@anularParroquia');
Route::get('/anularCiudad/{id}', 'con_histoCiudad@anularCiudad');

	Route::get('/home', function () {
    return view('/home');
});
});

