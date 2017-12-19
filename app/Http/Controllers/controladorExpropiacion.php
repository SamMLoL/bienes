<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloExpropiacion;
use App\sel_expropiacion;
use App\modeloBitacora;

class controladorExpropiacion extends Controller
{
    public function index()
    {
      $infoSelect = sel_expropiacion::all();

      $lastCod = modeloExpropiacion::select('codOt2_5')->get()->last();

      $arrayT25 = array(
        array("codOt2_5","Código de Origen:","Introduzca número consecutivo. Ej: F-2; F-3;","12","col-md-pull-4",""),
        array("nomPan","Nombre del Propietario Anterior:","Introduzca nombre del propietario anterior","100","col-md-push-0",""),
        array("nomBen","Nombre del Beneficiario:","Introduzca nombre del beneficiario","100","",""),
        array("nomAut","Nombre de la Autoridad:","Introduzca nombre de la autoridad","100","",""),
        array("numSena","Número de Sentencia o Acto Administrativo:","Introduzca el número de sentencia","30","",""),
        array("nomRegn","Nombre del Registro o Notaría:","Introduzca nombre del registro o notaría","100","",""),
        array("tomo","Tomo:","Introduzca el tomo del registro","20","",""),
        array("folio","Folio:","Introduzca el N° de folio","6","","return soloNum(event)"),
        );

      $selectT25 = array(
        array("codAdq","Código de Adquisición:","col-md-push-4"),
        );

      $dateT25= array(
        array("feSena","Fecha de Sentencia o Acto Administrativo:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

      $date2T25= array(
        array("feReg","Fecha de Registro:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

      return view('tablasForm.visExpropiacion', compact('infoSelect','arrayT25','selectT25','dateT25','date2T25','lastCod'));

    }


    public function store(Request $request)
    {

        $form_t25=new modeloExpropiacion();
        $form_t25->codAdq = $request->codAdq;
        $form_t25->revisadot25 = 1;
        
        if($form_t25->codOt2_5 =$request->codOt2_5 == ''){
          $form_t25->codOt2_5 = 'F-1';
          }else{
          $form_t25->codOt2_5 = $request->codOt2_5;  
        }

        if($form_t25->nomPan =$request->nomPan == ''){
          $form_t25->nomPan = '1';
          }else{
          $form_t25->nomPan = $request->nomPan;  
        }

        if($form_t25->nomBen = $request->nomBen == ''){
          $form_t25->nomBen = '1';
          }else{
          $form_t25->nomBen = $request->nomBen;  
        }

        if($form_t25->nomAut = $request->nomAut == ''){
          $form_t25->nomAut = '1';
          }else{
          $form_t25->nomAut = $request->nomAut;  
        }

        if($form_t25->numSena = $request->numSena == ''){
          $form_t25->numSena = '0';
          }else{
          $form_t25->numSena = $request->numSena;  
        }

        if($form_t25->nomRegn = $request->nomRegn == ''){
          $form_t25->nomRegn = '1';
          }else{
          $form_t25->nomRegn = $request->nomRegn;  
        }

        if($form_t25->tomo = $request->tomo == ''){
          $form_t25->tomo = '1';
          }else{
          $form_t25->tomo = $request->tomo;  
        }

        if($form_t25->folio = $request->folio == ''){
          $form_t25->folio = '0';
          }else{
          $form_t25->folio = $request->folio;  
        }

        if($form_t25->feSena = $request->feSena == ''){
          $form_t25->feSena = '11111111';
          }else{
          $form_t25->feSena = $request->feSena;  
        }

        if($form_t25->feReg = $request->feReg == ''){
          $form_t25->feReg = '11111111';
          }else{
          $form_t25->feReg = $request->feReg;  
        }

        if($form_t25->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Expropiación';
          $bit->save();

          }

          return back()->with('msj', 'Datos Registrados Exitosamente');
       
    }


    public function edit($id)
    {
        $form_t25 = modeloExpropiacion::find($id);
        $infoSelect = sel_expropiacion::all();

       return view('layouts.modificarExpropiacion',compact('form_t25','infoSelect'));
    }

   
    public function update(Request $request, $id)
    {
        $form_t25= modeloExpropiacion::find($id);
        $form_t25->codOt2_5 = $request->codOt2_5;
        $form_t25->codAdq = $request->codAdq;


        if($form_t25->nomPan =$request->nomPan == ''){
          $form_t25->nomPan = '1';
          }else{
          $form_t25->nomPan = $request->nomPan;  
        }

        if($form_t25->nomBen = $request->nomBen == ''){
          $form_t25->nomBen = '1';
          }else{
          $form_t25->nomBen = $request->nomBen;  
        }

        if($form_t25->nomAut = $request->nomAut == ''){
          $form_t25->nomAut = '1';
          }else{
          $form_t25->nomAut = $request->nomAut;  
        }

        if($form_t25->numSena = $request->numSena == ''){
          $form_t25->numSena = '0';
          }else{
          $form_t25->numSena = $request->numSena;  
        }

        if($form_t25->nomRegn = $request->nomRegn == ''){
          $form_t25->nomRegn = '1';
          }else{
          $form_t25->nomRegn = $request->nomRegn;  
        }

        if($form_t25->tomo = $request->tomo == ''){
          $form_t25->tomo = '1';
          }else{
          $form_t25->tomo = $request->tomo;  
        }

        if($form_t25->folio = $request->folio == ''){
          $form_t25->folio = '0';
          }else{
          $form_t25->folio = $request->folio;  
        }

        if($form_t25->feSena = $request->feSena == ''){
          $form_t25->feSena = '11111111';
          }else{
          $form_t25->feSena = $request->feSena;  
        }

        if($form_t25->feReg = $request->feReg == ''){
          $form_t25->feReg = '11111111';
          }else{
          $form_t25->feReg = $request->feReg;  
        }

        if($form_t25->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Expropiación';
          $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }
}
