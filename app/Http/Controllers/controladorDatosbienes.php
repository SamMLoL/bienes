<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDatosbienes;
use App\modeloMarcas;
use App\modeloModelos;
use App\modeloBitacora;

class controladorDatosbienes extends Controller
{
    public function index()
    {
    	$lastCod = modeloDatosbienes::select('codBien')->get()->last();
		$marcas = modeloMarcas::all();
     	$modelos = modeloModelos::all();

     	return view('AnexosT.visDatosbienes', compact('lastCod','marcas','modelos'));
    }

    public function store(Request $request)
    {
    	$form_t11 = new modeloDatosbienes();
    	$form_t11->codBien = $request->codBien;
    	$form_t11->codMarca = $request->codMarca;
    	$form_t11->codModel = $request->codModel;
    	$form_t11->revisadot11 = 1;

    	if($form_t11->codCompo = $request->codCompo == ''){
            $form_t11->codCompo = '1';

            }else{
            $form_t11->codCompo = $request->codCompo;    
            }

        if($form_t11->serialCompo = $request->serialCompo == ''){
            $form_t11->serialCompo = '1';

            }else{
            $form_t11->serialCompo = $request->serialCompo;    
            }

        if($form_t11->codTipoCompo = $request->codTipoCompo == ''){
            $form_t11->codTipoCompo = '1';

            }else{
            $form_t11->codTipoCompo = $request->codTipoCompo;    
            }

        if($form_t11->descCompo = $request->descCompo == ''){
            $form_t11->descCompo = '1';

            }else{
            $form_t11->descCompo = $request->descCompo;    
            }

        if($form_t11->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Datos de los Bienes';
          $bit->save();
          
          }
            return back()->with('msj', 'Datos Registrados Exitosamente');
    }

     public function edit($id)
    {
          $form_t11 = modeloDatosbienes::find($id);
          $lastCod = modeloDatosbienes::select('codBien')->get()->last();
          $marcas = modeloMarcas::all();
     	  $modelos = modeloModelos::all();
         

        return view('layouts.ModificarAnexosT.modificarDatosbienes', compact('form_t11','lastCod','marcas','modelos'));
    }

     public function update(Request $request, $id)
    {
	      $form_t11 = modeloDatosbienes::find($id);
	      $form_t11->codBien = $request->codBien;
	      $form_t11->codMarca = $request->codMarca;
	      $form_t11->codModel = $request->codModel;
	    	

    	if($form_t11->codCompo = $request->codCompo == ''){
            $form_t11->codCompo = '1';

            }else{
            $form_t11->codCompo = $request->codCompo;    
            }

        if($form_t11->serialCompo = $request->serialCompo == ''){
            $form_t11->serialCompo = '1';

            }else{
            $form_t11->serialCompo = $request->serialCompo;    
            }

        if($form_t11->codTipoCompo = $request->codTipoCompo == ''){
            $form_t11->codTipoCompo = '1';

            }else{
            $form_t11->codTipoCompo = $request->codTipoCompo;    
            }

        if($form_t11->descCompo = $request->descCompo == ''){
            $form_t11->descCompo = '1';

            }else{
            $form_t11->descCompo = $request->descCompo;    
            }

        if($form_t11->save()){

            $bit = new modeloBitacora();
            $bit->user = $_SESSION['id'];
            $bit->accion  = 2;
            $bit->referencia = 'Datos de los Bienes';
            $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
