<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloInmuebles;
use App\sel_responsables1;
use App\sel_seguros3;
use App\sel_proveedores;
use App\sel_paises;
use App\sel_parroquias;
use App\sel_ciudades;
use App\sel_estatusbien;
use App\sel_seguros2;
use App\sel_medidapeso;
use App\sel_usos;
use App\modeloBitacora;

class controladorInmuebles extends Controller
{
    public function index()
    {	
    	$lastCod = modeloInmuebles::select('codBien')->get()->last();
    	$dependencia = sel_responsables1::all();
    	$corresBien = sel_seguros3::all();
    	$localizacion = sel_proveedores::all();
    	$codigoPais = sel_paises::all();
    	$codigoParroquia = sel_parroquias::all();
    	$codigoCiudad = sel_ciudades::all();
    	$estatusBien = sel_estatusbien::orderBy('opcion')->get();
    	$moneda = sel_seguros2::all();
    	$usoInmueble = sel_usos::all();
    	$unidadConstru = sel_medidapeso::all();
    	$unidadTerreno = sel_medidapeso::all();
    	$seguroBien = sel_seguros3::all();

    	return view('tablasForm.visInmuebles', compact('lastCod','dependencia','corresBien','localizacion','codigoPais','codigoParroquia','codigoCiudad','estatusBien','moneda','usoInmueble','unidadConstru','unidadTerreno','seguroBien'));
    }
}
