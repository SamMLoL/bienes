<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloPermuta;
use App\sel_permuta;
use App\modeloBitacora;

class controladorPermuta extends Controller
{
    public function index()
    {
        $infoSelect = sel_permuta::all();

        $lastCod = modeloPermuta::select('codOt2_6')->get()->last();

        $arrayT26 = array(
            array("codOt2_6","Código de Origen:","Introduzca número consecutivo. Ej: G-2; G-3;","12","col-md-pull-4",""),
            array("nomCope","Nombre del Copermutante:","Introduzca nombre del copermutante","100","col-md-push-0",""),
            array("nomBen","Nombre del Beneficiario:","Introduzca nombre del beneficiario","100","",""),
            array("nomLic","Nombre de la Licitación:","Introduzca nombre de la licitación","255","",""),
            array("numLic","Número de la Licitación:","Introduzca el N° licitación","30","",""),
            array("numCon","Número del Contrato:","Introduzca el N° de contrato","30","",""),
            array("nomRegn","Nombre del Registro o Notaría:","Introduzca nombre del registro o notaría","100","",""),
            array("tomo","Tomo:","Introduzca el tomo del registro","20","",""),
            array("folio","Folio:","Introduzca el N° de folio","6","","return soloNum(event)"),
            );

        $selectT26 = array(
        array("codAdq","Código de Adquisición:","col-md-push-4"),
        );

        $dateT26= array(
        array("feLic","Fecha de Licitación:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

        $date2T26= array(
        array("feCon","Fecha del Contrato:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

        $date3T26= array(
        array("feReg","Fecha de Registro:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

        return view('tablasForm.visPermuta', compact('infoSelect','arrayT26','selectT26','dateT26','date2T26','date3T26','lastCod'));
    }

    public function store(Request $request)
    {

        $form_t26= new modeloPermuta();
        $form_t26->codAdq = $request->codAdq;
        $form_t26->revisadot26 = 1;

        if($form_t26->codOt2_6 =$request->codOt2_6 == ''){
          $form_t26->codOt2_6 = 'G-1';
          }else{
          $form_t26->codOt2_6 = $request->codOt2_6;  
        }

        if($form_t26->nomCope =$request->nomCope == ''){
          $form_t26->nomCope = '1';
          }else{
          $form_t26->nomCope = $request->nomCope;  
        }

        if($form_t26->nomBen = $request->nomBen == ''){
          $form_t26->nomBen = '1';
          }else{
          $form_t26->nomBen = $request->nomBen;  
        }

        if($form_t26->nomLic = $request->nomLic == ''){
          $form_t26->nomLic = '1';
          }else{
          $form_t26->nomLic = $request->nomLic;  
        }

        if($form_t26->numLic = $request->numLic == ''){
          $form_t26->numLic = '0';
          }else{
          $form_t26->numLic = $request->numLic;  
        }

        if($form_t26->numCon = $request->numCon == ''){
          $form_t26->numCon = '0';
          }else{
          $form_t26->numCon = $request->numCon;  
        }

        if($form_t26->nomRegn = $request->nomRegn == ''){
          $form_t26->nomRegn = '1';
          }else{
          $form_t26->nomRegn = $request->nomRegn;  
        }

        if($form_t26->tomo = $request->tomo == ''){
          $form_t26->tomo = '1';
          }else{
          $form_t26->tomo = $request->tomo;  
        }

        if($form_t26->folio = $request->folio == ''){
          $form_t26->folio = '0';
          }else{
          $form_t26->folio = $request->folio;  
        }

        if($form_t26->feLic = $request->feLic == ''){
          $form_t26->feLic = '11111111';
          }else{
          $form_t26->feLic = $request->feLic;  
        }

        if($form_t26->feCon = $request->feCon == ''){
          $form_t26->feCon = '11111111';
          }else{
          $form_t26->feCon = $request->feCon;  
        }

        if($form_t26->feReg = $request->feReg == ''){
          $form_t26->feReg = '11111111';
          }else{
          $form_t26->feReg = $request->feReg;  
        }

        if($form_t26->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Permuta';
          $bit->save();

          }

          return back()->with('msj', 'Datos Registrados Exitosamente');
            
    }

 
    public function edit($id)
    {
        $form_t26 = modeloPermuta::find($id);
        $infoSelect = sel_permuta::all();

        return view('layouts.modificarPermuta', compact('form_t26','infoSelect'));
    }

 
    public function update(Request $request, $id)
    {
        $form_t26= modeloPermuta::find($id);
        $form_t26->codOt2_6 = $request->codOt2_6;
        $form_t26->codAdq = $request->codAdq;


        if($form_t26->nomCope =$request->nomCope == ''){
          $form_t26->nomCope = '1';
          }else{
          $form_t26->nomCope = $request->nomCope;  
        }

        if($form_t26->nomBen = $request->nomBen == ''){
          $form_t26->nomBen = '1';
          }else{
          $form_t26->nomBen = $request->nomBen;  
        }

        if($form_t26->nomLic = $request->nomLic == ''){
          $form_t26->nomLic = '1';
          }else{
          $form_t26->nomLic = $request->nomLic;  
        }

        if($form_t26->numLic = $request->numLic == ''){
          $form_t26->numLic = '0';
          }else{
          $form_t26->numLic = $request->numLic;  
        }

        if($form_t26->numCon = $request->numCon == ''){
          $form_t26->numCon = '0';
          }else{
          $form_t26->numCon = $request->numCon;  
        }

        if($form_t26->nomRegn = $request->nomRegn == ''){
          $form_t26->nomRegn = '1';
          }else{
          $form_t26->nomRegn = $request->nomRegn;  
        }

        if($form_t26->tomo = $request->tomo == ''){
          $form_t26->tomo = '1';
          }else{
          $form_t26->tomo = $request->tomo;  
        }

        if($form_t26->folio = $request->folio == ''){
          $form_t26->folio = '0';
          }else{
          $form_t26->folio = $request->folio;  
        }

        if($form_t26->feLic = $request->feLic == ''){
          $form_t26->feLic = '11111111';
          }else{
          $form_t26->feLic = $request->feLic;  
        }

        if($form_t26->feCon = $request->feCon == ''){
          $form_t26->feCon = '11111111';
          }else{
          $form_t26->feCon = $request->feCon;  
        }

        if($form_t26->feReg = $request->feReg == ''){
          $form_t26->feReg = '11111111';
          }else{
          $form_t26->feReg = $request->feReg;  
        }

        if($form_t26->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Permuta';
          $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
