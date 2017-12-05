<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloBienes;
use App\modeloResponsables;

class controladorBienes extends Controller
{
    public function index()
    {
    	$infoSelect = modeloResponsables::all();

     	$arrayt8 = array(
     		array("codOt2_1","Código del Origen del Bien:","Introduzca el código del origen del bien","12"),
     		array("codCata","Código según Catalogo:","Introduzca el código de la categoría especifica","10"),
     		array("depenAdm","Dependencia Administrativadonde se ubica el Bien:","Introduzca el código de la dependencia","10"),
     		array("sedeOrgano","Sede del Órgano o ente donde se encuentra el Bien:","Indique el código de la Sede o Lugar que corresponde al código de la edad","10"),
     		array("codResBien","Código del Responsable del uso directo del Bien:","Introduzca el código del responsable del bien","10"),
     		array("codInterno","Código interno del Bien:","Introduzca el código interno del bien","20"),
     		array("espOtro","Especifique el otro uso:","Especifique otro uso del bien","100"),
     		array("valorAdq","Valor de Adquisición del Bien:","Introduzca el valor del bien","26"),
     		array("espeMoneda","Especifique la Otra Moneda","Especifique la otra moneda","30"),
     		array("espOtroEdo","Especifique el Otro Estado del Bien","Especifique otro estado del bien","30"),
     		array("descEdoBien","Descripción del Estado del Bien:","Introduzca la descripción del estado del bien","200"),
     		array("serialBien","Serial del Bien:","Introduzca el serial del bien","50"),
     		array("añoFabriBien","Año de Fabricación del Bien:","Introduzca el año de fabricación","4"),
     		array("espeColor","Especificación del color:","Especifique el color","50"),
     		array("otraEspeColor","Otras Especificaciones del color:","Introduzca otras especificaciones del bien","255"),
     		array("espeTecBien","Especificaciones Técnicas del Bien:","Introduzca especificaciones técnicas del bien","255"),
     		array("otraDescBien","Otras Especificaciones de descripción del Bien:","describa otras especificaciones del bien","255"),
     		array("garantia","Garantía:","Indique la garantía del bien","5"),
     		array("codRegSeguro","Código del Registro de Seguro:","Introduzca el código del registro de seguro","10"),
     		

     		);

     	$select = array(
     		array("codRespAdm","Código del Responsable Administrativo:","10"),
     		);

     	$select1 = array(
     		array("codInterno","Código del Responsable del uso directo del Bien:","10"),
     		);

     	$select2 = array(
     		array("estatuBien","Estatus del uso del Bien:","5"),
     		);

     	$select3 = array(
     		array("moneda","Moneda:","5"),
     		);


     	$select4 = array(
     		array("edoBien","Estado del Bien:","5"),
     	 	);

     	$select5 = array(
     		array("codMarca","Código de la Marca del Bien:","10"),
     		);

     	$select6 = array(
     		array("codModel","Código de la Modelo del Bien:","10"),
     		);

     	$select7 = array(
     		array("codColorBien","Código del Color del Bien:","Seleccione el código del color","5"),
     		);

     	$select8 = array(
     		array("unidadMedi","Unidad de Medida de la Garantía:","Seleccione la unidad de medida","2"),
     		);

     	$select9 = array(
     		array("poseeCompo","Posee Componentes:","Seleccione la unidad los valores","1"),
     		);

     	$select10 = array(
     		array("seguroBien","Se encuentra asegurado el Bien:","Seleccione los valores","1"),
     		);

     	//FECHAS
     	$date = array(
     		array("feAdqBien","Fecha de Adquisición del Bien:","10"),
     		);

     	$date1 = array(
     		array("feIngBien","Fecha de Ingreso del Bien:","10"),
     		);

     	$date2 = array(
     		array("feIniGarantia","Fecha Inicio de la garantía:","10"),
     		);

     	$date3 = array(
     		array("feFinGarantia","Fecha Fin de la garantía:","10"),
     		);

     	return view('tablasForm.visBienes', compact('infoSelect','arrayt8','select','select1','select2','select3','select4','select5','select6','select7','select8','select9','select10','date','date1','date2','date3'));

    }
}
