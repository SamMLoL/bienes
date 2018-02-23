<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS4;
use App\sel_proveedores;
use App\sel_paises;
use App\sel_parroquias;
use App\sel_ciudades;
use App\modeloBitacora;		


class controladorS4 extends Controller
{
    public function index()
    {
		$lastCod = modeloS4::select('codSede')->get()->last();
		$localizacion = sel_proveedores::all();
    	$codigoPais = sel_paises::all();
    	$codigoParroquia = sel_parroquias::all();
    	$codigoCiudad = sel_ciudades::all();

    	$codSede = array(
    		array("codSede","Código de la Sede:","Introduzca el código de la sede","10"),
    		);

    	$selectSede = array(
            array("tipoSede","Tipo de Sede:","2"),
            );

    	$espeSede = array(
    		array("espeSede","Especifique Tipo de Sede o Lugar:","Especifique el tipo de sede","10"),
    		);

    	$descSede = array(
    		array("descSede","Descripción de la Sede:","Describa la sede","200"),
    		);

    	$descSede = array(
    		array("espeSede","Descripción de la Sede:","Describa la sede","200"),
    		);




    	return view('AnexosT.visSedes', compact('lastCod','localizacion','codigoPais','codigoParroquia','codigoCiudad','codSede','selectSede','espeSede'))
    }
}
