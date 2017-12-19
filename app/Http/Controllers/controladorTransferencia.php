<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloTransferencia;
use App\sel_transferencia;
use App\modeloBitacora;


class controladorTransferencia extends Controller
{
    public function index()
    {
        $infoSelect = sel_transferencia::all();

        $lastCod = modeloTransferencia::select('codOt2_7')->get()->last();

        $arrayT27 = array(
            array("codOt2_7","Código de Origen:","Introduzca número consecutivo. Ej: H-2; H-3","12","col-md-pull-4",""),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomQtra","Nombre de Quien Transfiere:","Introduzca nombre del quien transfiere","120","col-md-push-0",""),
            array("nomBen","Nombre del Beneficiario:","Introduzca nombre del beneficiario (quien recibe)","120","",""),
            array("numAuto","Número de la Autorización:","Introduzca el número de la autorización","30","",""),
            array("nomRegn","Nombre del Registro o Notaría:","Introduzca nombre del registro o notaría","100","",""),
            array("tomo","Tomo:","Introduzca el tomo del registro","20","",""),
            array("folio","Folio:","Introduzca el N° de folio","6","","return soloNum(event)"),
            );

        $selectT27 = array(
        array("codAdq","Código de Adquisición:","col-md-push-4"),
        );

        $dateT27 = array(
            array("feLic","Fecha de la Autorización:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T27 = array(
            array("feLic","Fecha de Registro:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('tablasForm.visTransferencia', compact('infoSelect','arrayT27','selectT27','dateT27','date2T27','lastCod'));
    }

   
    public function store(Request $request)
    {

        $form_t27= new modeloTransferencia();
        $form_t27->codAdq = $request->codAdq;
        $form_t27->revisadot27 = 1;

        if($form_t27->codOt2_7 =$request->codOt2_7 == ''){
          $form_t27->codOt2_7 = 'H-1';
          }else{
          $form_t27->codOt2_7 = $request->codOt2_7;  
        }

        if($form_t27->nomQtra =$request->nomQtra == ''){
          $form_t27->nomQtra = '1';
          }else{
          $form_t27->nomQtra = $request->nomQtra;  
        }

        if($form_t27->nomBen = $request->nomBen == ''){
          $form_t27->nomBen = '1';
          }else{
          $form_t27->nomBen = $request->nomBen;  
        }

        if($form_t27->numAuto = $request->numAuto == ''){
          $form_t27->numAuto = '0';
          }else{
          $form_t27->numAuto = $request->numAuto;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->tomo = $request->tomo == ''){
          $form_t27->tomo = '1';
          }else{
          $form_t27->tomo = $request->tomo;  
        }

        if($form_t27->folio = $request->folio == ''){
          $form_t27->folio = '0';
          }else{
          $form_t27->folio = $request->folio;  
        }

        if($form_t27->feAuto = $request->feAuto == ''){
          $form_t27->feAuto = '11111111';
          }else{
          $form_t27->feAuto = $request->feAuto;  
        }


        if($form_t27->feReg = $request->feReg == ''){
          $form_t27->feReg = '11111111';
          }else{
          $form_t27->feReg = $request->feReg;  
        }

        if($form_t27->save()){

	        $bit = new modeloBitacora();
	        $bit->user = $_SESSION['id'];
	        $bit->accion  = 1;
	        $bit->referencia = 'Transferencia';
	        $bit->save();

        }
          return back()->with('msj', 'Datos Registrados Exitosamente');
          
    }
    

    public function edit($id)
    {
        $form_t27 = modeloTransferencia::find($id);
        $infoSelect = sel_transferencia::all();

        return view('layouts.modificarTransferencia', compact('form_t27','infoSelect'));
    }

   
    public function update(Request $request, $id)
    {
        $form_t27= modeloTransferencia::find($id);
        $form_t27->codOt2_7 = $request->codOt2_7;
        $form_t27->codAdq = $request->codAdq;

        if($form_t27->nomQtra =$request->nomQtra == ''){
          $form_t27->nomQtra = '1';
          }else{
          $form_t27->nomQtra = $request->nomQtra;  
        }

        if($form_t27->nomBen = $request->nomBen == ''){
          $form_t27->nomBen = '1';
          }else{
          $form_t27->nomBen = $request->nomBen;  
        }

        if($form_t27->numAuto = $request->numAuto == ''){
          $form_t27->numAuto = '0';
          }else{
          $form_t27->numAuto = $request->numAuto;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->tomo = $request->tomo == ''){
          $form_t27->tomo = '1';
          }else{
          $form_t27->tomo = $request->tomo;  
        }

        if($form_t27->folio = $request->folio == ''){
          $form_t27->folio = '0';
          }else{
          $form_t27->folio = $request->folio;  
        }

        if($form_t27->feAuto = $request->feAuto == ''){
          $form_t27->feAuto = '11111111';
          }else{
          $form_t27->feAuto = $request->feAuto;  
        }


        if($form_t27->feReg = $request->feReg == ''){
          $form_t27->feReg = '11111111';
          }else{
          $form_t27->feReg = $request->feReg;  
        }

        if($form_t27->save()){

        	$bit = new modeloBitacora();
         	$bit->user = $_SESSION['id'];
            $bit->accion  = 2;
            $bit->referencia = 'Transferencia';
            $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
