<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDonacion;
use App\sel_donacion;
use App\modeloBitacora;


class controladorDonacion extends Controller
{
     public function index()
    {
        
        $infoSelect = sel_donacion::all();

        $lastCod = modeloDonacion::select('codOt2_4')->get()->last();

        $arrayT24 = array(
            array("codOt2_4","Código de Origen:","Introduzca número consecutivo. Ej: E-2; E-3;","12","col-md-pull-4",""),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomDona","Nombre del Donante:","Introduzca nombre del donante","100","col-md-push-0",""),
            array("nomBen","Nombre del Beneficiario:","Introduzca nombre del beneficiario","100","",""),
            array("numConac","Número del Contrato o Acta:","Introduzca el nombre contrato o acta","30","",""),
            array("nomRegn","Nombre del Registro o Notaría:","Introduzca nombre del registro o notaría","100","",""),
            array("tomo","Tomo:","Introduzca el tomo del registro","20","",""),
            array("folio","Folio:","Introduzca el N° de folio","6","","return soloNum(event)"),
            );

        $selectT24= array(
            array("codAdq","Código de Adquisición:","col-md-push-4"),
            );

        $dateT24=array(
            array("feConac","Fecha del Contrato o Acta:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T24=array(
            array("feReg","Fecha de Registro:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('AnexosT.visDonacion', compact('infoSelect','arrayT24','selectT24','dateT24','date2T24','lastCod'));
    }

    public function store(Request $request)
    {

        $form_t24=new modeloDonacion();
        $form_t24->codAdq = $request->codAdq;
        $form_t24->revisadot24 = 1;

        if($form_t24->codOt2_4 =$request->codOt2_4 == ''){
          $form_t24->codOt2_4 = 'E-1';
          }else{
          $form_t24->codOt2_4 = $request->codOt2_4;  
        }
        
        if($form_t24->nomDona =$request->nomDona == ''){
          $form_t24->nomDona = '1';
          }else{
          $form_t24->nomDona = $request->nomDona;  
        }

        if($form_t24->nomBen = $request->nomBen == ''){
          $form_t24->nomBen = '1';
          }else{
          $form_t24->nomBen = $request->nomBen;  
        }

        if($form_t24->numConac = $request->numConac == ''){
          $form_t24->numConac = '0';
          }else{
          $form_t24->numConac = $request->numConac;  
        }

        if($form_t24->nomRegn = $request->nomRegn == ''){
          $form_t24->nomRegn = '1';
          }else{
          $form_t24->nomRegn = $request->nomRegn;  
        }

        if($form_t24->tomo = $request->tomo == ''){
          $form_t24->tomo = '1';
          }else{
          $form_t24->tomo = $request->tomo;  
        }

        if($form_t24->folio = $request->folio == ''){
          $form_t24->folio = '0';
          }else{
          $form_t24->folio = $request->folio;  
        }

        if($form_t24->feConac = $request->feConac == ''){
          $form_t24->feConac = '11111111';
          }else{
          $form_t24->feConac = $request->feConac;  
        }

        if($form_t24->feReg = $request->feReg == ''){
          $form_t24->feReg = '11111111';
          }else{
          $form_t24->feReg = $request->feReg;  
        }

        if($form_t24->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Donación';
          $bit->save();

          }

          return back()->with('msj', 'Datos Registrados Exitosamente');
             
        }
  


    public function edit($id)
    {
        $form_t24 = modeloDonacion::find($id);
        $infoSelect = sel_donacion::all();

       return view('layouts.ModificarAnexosT.modificarDonacion',compact('form_t24','infoSelect'));
    }

    public function update(Request $request, $id)
    {
        $form_t24= modeloDonacion::find($id);
        $form_t24->codOt2_4 = $request->codOt2_4;
        $form_t24->codAdq = $request->codAdq;


        if($form_t24->nomDona =$request->nomDona == ''){
          $form_t24->nomDona = '1';
          }else{
          $form_t24->nomDona = $request->nomDona;  
        }

        if($form_t24->nomBen = $request->nomBen == ''){
          $form_t24->nomBen = '1';
          }else{
          $form_t24->nomBen = $request->nomBen;  
        }

        if($form_t24->numConac = $request->numConac == ''){
          $form_t24->numConac = '0';
          }else{
          $form_t24->numConac = $request->numConac;  
        }

        if($form_t24->nomRegn = $request->nomRegn == ''){
          $form_t24->nomRegn = '1';
          }else{
          $form_t24->nomRegn = $request->nomRegn;  
        }

        if($form_t24->tomo = $request->tomo == ''){
          $form_t24->tomo = '1';
          }else{
          $form_t24->tomo = $request->tomo;  
        }

        if($form_t24->folio = $request->folio == ''){
          $form_t24->folio = '0';
          }else{
          $form_t24->folio = $request->folio;  
        }

        if($form_t24->feConac = $request->feConac == ''){
          $form_t24->feConac = '11111111';
          }else{
          $form_t24->feConac = $request->feConac;  
        }

        if($form_t24->feReg = $request->feReg == ''){
          $form_t24->feReg = '11111111';
          }else{
          $form_t24->feReg = $request->feReg;  
        }

        if($form_t24->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Donación';
          $bit->save();

            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
