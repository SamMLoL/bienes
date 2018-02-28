<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS4;
use App\sel_proveedores;
use App\sel_sedes;
use App\sel_paises;
use App\sel_parroquias;
use App\sel_ciudades;
use App\modeloBitacora;		


class controladorS4 extends Controller
{
    public function index()
    {
		$lastCod = modeloS4::select('codSede')->get()->last();
        $lugarSedes = sel_sedes::all();
		$selectLoca = sel_proveedores::all();
    	$selectPais = sel_paises::all();
    	$selectParroquia = sel_parroquias::all();
        $codigoCiudad = sel_ciudades::all();
    	

    	$codSede = array(
    		array("codSede","Código de la Sede:","Introduzca el código de la sede","10"),
    		);

    	$selectSede = array(
            array("tipoSede","Tipo de Sede:","2"),
            );

    	$espeSede = array(
    		array("espeSede","Especifique Tipo de Sede o Lugar:","Especifique el tipo de sede","100"),
    		);

    	$descSede = array(
    		array("descSede","Descripción de la Sede:","Describa la sede","255"),
    		);

        $localizacion = array(
            array("localizacion","Localización:","2"),
            );

        $codPais = array(
            array("codPais","Código del País donde se Ubica la Sede:","2"),
            );

    	$espePais = array(
    		array("espeOtroPais","Especifique Otro País:","Especifique otro país","100"),
    		);

        $codParroquia = array(
            array("codParroquia","Código de Parroquia donde se Ubica el Ente:","2"),
            );

        $codigoCiudad = array(
            array("codCiudad","Código de la Ciudad donde se Ubica el Órgano o Ente:","2"),
            );


        $espeCiudad = array(
            array("espeOtroCiudad","Especifique Nombre de la Otra Ciudad:","Especifique el nombre de la otra ciudad","100"),
            );

        $urbanizacion = array(
            array("urbanizacion","Urbanización:","Introduzca la urbanización de la sede","30"),
            );

        $calleAvenida = array(
            array("calleAvenida","Calle / Avenida:","Introduzca la calle o avenida de la sede","50"),
            );

        $casaEdificio = array(
            array("casaEdificio","Casa / Edificio:","Introduzca la casa o avenida de la sede","50"),
            );

        $piso = array(
            array("piso","Piso:","Introduzca el piso donde se localiza la sede","20"),
            );



    	return view('AnexosS.visSedes', compact('lastCod','lugarSedes','selectLoca','selectPais','selectParroquia','codigoCiudad','codSede','selectSede','espeSede','descSede','localizacion','codPais','espePais','codParroquia','espeCiudad','urbanizacion','calleAvenida','casaEdificio','piso'));
    }
}
