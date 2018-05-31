<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS5;
use App\sel_unidades;
use App\sel_categoria;
use App\modeloBitacora;

class controladorS5 extends Controller
{
    public function index()
    {	
    	$lastCod = modeloS5::select('codUnidad')->get()->last();

    	$infoSelect = sel_categoria::all();

    	$coUnidad = array(
    			array("codUnidad","Código de la Unidad:","10","Introduzca el código de la unidad","Introduza el código de la unidad  administrativa"),
    		);

    	$desUnidad = array(
    			array("descUnidad","Descripción de la Unidad:","255","indique la denominación de la unidad","Describa la denominación de la unidad..."),
    		);

    	$sel_categoria = array(
    			array("categoria","Código de la Categoría de la Unidad:","2"),
    		);

    	$espeCategoria = array(
    			array("espeCatego","Especifique la Denominación de la Categoría:","2","Denominación de Categoría de la unidad"),
    		);

    	$uniAdscrita = array(
    			array("codAdscrita","Código de Unidad a la cual está Adscrita","10","Indique el código a la cual está adscrita"),
    		);

    	return view('AnexosS.visUnidades', compact('lastCod','infoSelect','coUnidad','desUnidad','sel_categoria','espeCategoria','uniAdscrita'));

    }

    public function store(Request $request)
    {
        $form_s5 = new modeloS5();
        $form_s5->codUnidad = $request->codUnidad;
        $form_s5->descUnidad = $request->descUnidad;
        $form_s5->categoria = $request->categoria;

        if($form_s5->espeCatego = $request->espeCatego == '')
        {
            $form_s5->espeCatego = 'xxx';
        }else{
            $form_s5->espeCatego = $request->espeCatego;
        }

        if($form_s5->codAdscrita = $request->codAdscrita == '')
        {
            $form_s5->codAdscrita = 'xxx';
        }else{
            $form_s5->codAdscrita = $request->codAdscrita;
        }

        if($form_s5->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Datos de las Unidades Administrativa';
          $bit->save();
         

        return back()->with('msj', 'Datos Registrados Exitosamente');
        }else {
        return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }
}
