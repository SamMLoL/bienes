<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS1;
use App\modeloBitacora;


class controladorS1 extends Controller
{
    public function index()
    {
    	$lastCod = modeloS1::select('codSigecof')->get()->last();

    	$codSige = array(
    		array("codSigecof","Código Sigecof:","Introduzca el código sigecof","17"),
    		);

    	$siglas = array(
    		array("siglas","Siglas:","Introduzca las siglas","15"),
    		);

    	$grupo = array(
          array("grupo","","1","col-md-push-4","J","V","G"),
          	);

    	$rif= array(
          array("rifProvee","RIF:","Introduzca el número de RIF","20"),
          	);

    	$razonSo = array(
    		array("razonSocial","Razón Social:","Descripción de la razón social...","255","4"),
    		);

    	$telefono = array(
    	 	array("telfEnte","Teléfono:","+58","10","return soloNum(event)","telefono")
    	 	);

    	$direcWeb = array(
    	 	array("direcWeb","Dirección Web:","Introduzca la Url de la página web","100")
    	 	);

    	$correEnte = array(
    	 	array("correEnte","Correo Electrónico:","Introduzca el correo electrónico","100"),
    	 	);

    	$fechaGaceta = array(
    		array("feGaceta","Fecha de Gaceta:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
    		);

    	$numeroGaceta = array(
    		array("numGaceta","Número de Gaceta:","Introduzca el número de gaceta","10"),
    		);

    	return view('AnexosS.visBasicos', compact('lastCod','codSige','siglas','grupo','rif','razonSo','telefono','direcWeb','correEnte','fechaGaceta','numeroGaceta'));
    }

    public function store(Request $request)
    {
    	$form_s1 = new modeloS1();
    	$form_s1->codSigecof = $request->codSigecof;
    	$form_s1->grupo = $request->grupo;
    	$form_s1->rifProvee = $request->rifProvee;
    	$form_s1->revisadoS1 = 1;
    	

    	if($form_s1->siglas = $request->siglas == '')
    	{
    		$form_s1->siglas == '1';
    	}else{
    		$form_s1->siglas = $request->siglas;
    	}

    	if($form_s1->razonSocial = $request->razonSocial == '')
    	{
    		$form_s1->razonSocial = '1';
    	}else{
    		$form_s1->razonSocial = $request->razonSocial;
    	}

    	if($form_s1->telfEnte = $request->telfEnte == '')
    	{
    		$form_s1->telfEnte = '0';
    	}else{
    		$form_s1->telfEnte = $request->telfEnte;
    	}

    	if($form_s1->direcWeb = $request->direcWeb == '')
    	{
    		$form_s1->direcWeb = '1';
    	}else{
    		$form_s1->direcWeb = $request->direcWeb;
    	}

    	if($form_s1->correEnte = $request->correEnte == '')
    	{
    		$form_s1->correEnte = '1';
    	}else{
    		$form_s1->correEnte = $request->correEnte;
    	}

    	if($form_s1->feGaceta = $request->feGaceta == '')
    	{
    		$form_s1->feGaceta = '11111111';
    	}else{
    		$form_s1->feGaceta = $request->feGaceta;
    	}

    	if($form_s1->numGaceta = $request->numGaceta == '')
    	{
    		$form_s1->numGaceta = '1';
    	}else{
    		$form_s1->numGaceta = $request->numGaceta;
    	}

    	if($form_s1->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Datos Básicos';
          $bit->save();

         

    	return back()->with('msj', 'Datos Registrados Exitosamente');
    	}else {
        return back()->with('errormsj', 'Los datos no se guardaron');
    	}
    }

    public function edit($id)
    {
        $form_s1 = modeloS1::find($id);
        $lastCod = modeloS1::select('codSigecof')->get()->last();
        
        return view('layouts.ModificarAnexosS.modificarBasicos', compact('form_s1','lastCod'));
    }

    public function update(Request $request, $id)
      {
        $form_s1 = modeloS1::find($id);
        $form_s1->codSigecof = $request->codSigecof;
        $form_s1->grupo = $request->grupo;
        $form_s1->rifProvee = $request->rifProvee;
        
        if ($form_s1->siglas = $request->siglas == '') {
        $form_s1->siglas = '1';
      
        }else{
          $form_s1->siglas = $request->siglas;
        }

        if ($form_s1->razonSocial = $request->razonSocial == '') {
        $form_s1->razonSocial = '1';
      
        }else{
          $form_s1->razonSocial = $request->razonSocial;
        }

        if ($form_s1->telfEnte = $request->telfEnte == '') {
        $form_s1->telfEnte = '0';
      
        }else{
          $form_s1->telfEnte = $request->telfEnte;
        }

        if ($form_s1->direcWeb = $request->direcWeb == '') {
        $form_s1->direcWeb = '1';
      
        }else{
          $form_s1->direcWeb = $request->direcWeb;
        }

        if ($form_s1->correEnte = $request->correEnte == '') {
        $form_s1->correEnte = '1';
      
        }else{
          $form_s1->correEnte = $request->correEnte;
        }

        if ($form_s1->feGaceta = $request->feGaceta == '') {
        $form_s1->feGaceta = '1111-11-11';
      
        }else{
          $form_s1->feGaceta = $request->feGaceta;
        }

        if ($form_s1->numGaceta = $request->numGaceta == '') {
        $form_s1->numGaceta = '1';
      
        }else{
          $form_s1->numGaceta = $request->numGaceta;
        }


        $form_s1->save();

        if($form_s1->save()){
          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Datos Básicos de los Inmuebles';
          $bit->save();
    
        
            return back()->with('msj', 'Datos modificados exitosamente');
        } else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

      }
}
