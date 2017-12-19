<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloResponsables;
use App\sel_responsables;
use App\sel_responsables1;
use App\modeloBitacora;


class controladorResponsables extends Controller
{
 
    public function index()
    {

    # for/id/name label /placeholder tabla->t4 type="text">
        $infoSelect = sel_responsables::all();
        $infoSelect1 = sel_responsables1::all();
        $lastCod = modeloResponsables::select('codResp')->get()->last();

        $arrayt4=array(
            array("codResp","Código del Responsable:","Introduzca el código del responsable","10","col-md-pull-4","",""),         
            array("cedula","Cédula de Identidad:","Introduzca la cédula de identidad","8",'col-md-push-0',"return soloNum(event)",""),         
            array("nomRes","Nombre del Responsable:","Introduzca el nombre del responsable","100","","",""),         
            array("apeRes","Apellido del Responsable:","Introduzca el apellido del responsable","100","","",""),         
            array("telfRes","Teléfono del Responsable:","+58","10","","return soloNum(event)","telefono"),         
            array("cargoRes","Cargo del Responsable:","Introduzca el cargo del responsable","200","","",""),         
            array("correRes","Correo Electrónico del Responsable:","¡Si se desconoce, deje el campo en blanco!","200","","",""),         
            );

        $select = array(
            array("tipoResp","Tipo de Responsable:","2","col-md-push-4"),
            );

        $select2 = array(
            array("depAdmRes","Dependencia Administrativa:","2"),
            );

        return view('tablasForm.visResponsables', compact('infoSelect','infoSelect1','arrayt4','select','select2','lastCod'));
    }

    
    public function store(Request $request)
    {
        $form_t4 = new modeloResponsables();
        $form_t4->codResp = $request->codResp;
        $form_t4->tipoResp = $request->tipoResp;
        $form_t4->depAdmRes = $request->depAdmRes;
        $form_t4->revisadot4 = 1;

     
        $form_t4->cedula = $request->cedula;
        $form_t4->nomRes = $request->nomRes;  
        $form_t4->apeRes = $request->apeRes;  
        $form_t4->telfRes = $request->telfRes;  
        $form_t4->cargoRes = $request->cargoRes;  


        if($form_t4->correRes = $request->correRes == ''){
          $form_t4->correRes = '0';  
        }else{
          $form_t4->correRes = $request->correRes; 
        }



        if($form_t4->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 1;
        $bit->referencia = 'Responsable de los Bienes';
        $bit->save();

            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
        
    }

    public function edit($id)
    {
        $form_t4 = modeloResponsables::find($id);
        $infoSelect = sel_responsables::all();
        $infoSelect1 = sel_responsables1::all();

        return view('layouts.modificarResponsables', compact('form_t4','infoSelect','infoSelect1'));
    }

    
    public function update(Request $request, $id)
    {
        $form_t4 = modeloResponsables::find($id);
        $form_t4->codResp = $request->codResp;
        $form_t4->tipoResp = $request->tipoResp;
        $form_t4->depAdmRes = $request->depAdmRes;
        $form_t4->cedula = $request->cedula;
        $form_t4->nomRes = $request->nomRes;  
        $form_t4->apeRes = $request->apeRes;  
        $form_t4->telfRes = $request->telfRes;  
        $form_t4->cargoRes = $request->cargoRes;  


        if($form_t4->correRes = $request->correRes == ''){
          $form_t4->correRes = '0';  
        }else{
          $form_t4->correRes = $request->correRes; 
        }

        if($form_t4->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 2;
        $bit->referencia = 'Responsable de los Bienes';
        $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }

}
