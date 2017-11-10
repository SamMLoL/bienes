<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloAdjudicacion;
use App\sel_adjudicacion;
use App\modeloBitacora;


class controladorAdjudicacion extends Controller
{
     	
	public function index()
	{
     	$infoSelect=sel_adjudicacion::all();

        $arrayT28 = array(
            array("codOt2_8","Código de Origen:","Introduzca el código de origen","12","col-md-pull-4"),
            array("nomProan","Nombre del Propietario Anterior:","Introduzca nombre del propietario anterior","100","col-md-push-0"),
            array("nomBen","Nombre del Beneficiario:","Introduzca nombre del beneficiario","100",""),
            array("nomAuto","Nombre de la Autoridad:","Introduzca nombre de la autoridad","100",""),
            array("numSeAdm","Número de Sentencia Administrativo:","Introduzca el número de sentencia o acto administrativo","30",""),
            array("nomRegn","Nombre del Registro o Notaría:","Introduzca nombre del registro o notaría","100",""),
            array("tomo","Tomo:","Introduzca el tomo del registro","20",""),
            array("folio","Folio:","Introduzca el N° de folio","6",""),
            );


        $selectT28 = array(
            array("codAdq","Código de Adquisición:","col-md-push-4"),
            );

        $dateT28= array(
            array("feSeAdm","Fecha de Sentencia o Acto:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T28= array(
            array("feReg","Fecha de Registro:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('tablasForm.visAdjudicacion', compact('infoSelect','arrayT28','selectT28','dateT28','date2T28'));
    }

    
    
    public function store(Request $request)
    {
        $form_t28= new modeloAdjudicacion();
        $form_t28->codAdq = $request->codAdq;
        $form_t28->revisadot28 = 1;
        $form_t28->anulart28 = 0;

        if($form_t28->codOt2_8 = $request->codOt2_8 == ''){
         $form_t28->codOt2_8 = '0'; 

           }else{
            $form_t28->codOt2_8 = $request->codOt2_8;
           }  

        if($form_t28->nomProan =$request->nomProan == ''){
          $form_t28->nomProan = '1';
          }else{
          $form_t28->nomProan = $request->nomProan;  
        }

        if($form_t28->nomBen = $request->nomBen == ''){
          $form_t28->nomBen = '1';
          }else{
          $form_t28->nomBen = $request->nomBen;  
        }

        if($form_t28->nomAuto = $request->nomAuto == ''){
          $form_t28->nomAuto = '1';
          }else{
          $form_t28->nomAuto = $request->nomAuto;  
        }

        if($form_t28->numSeAdm = $request->numSeAdm == ''){
          $form_t28->numSeAdm = '0';
          }else{
          $form_t28->numSeAdm = $request->numSeAdm;  
        }

        if($form_t28->nomRegn = $request->nomRegn == ''){
          $form_t28->nomRegn = '1';
          }else{
          $form_t28->nomRegn = $request->nomRegn;  
        }

        if($form_t28->tomo = $request->tomo == ''){
          $form_t28->tomo = '1';
          }else{
          $form_t28->tomo = $request->tomo;  
        }

        if($form_t28->folio = $request->folio == ''){
          $form_t28->folio = '0';
          }else{
          $form_t28->folio = $request->folio;  
        }

        if($form_t28->feSeAdm = $request->feSeAdm == ''){
          $form_t28->feSeAdm = '11111111';
          }else{
          $form_t28->feSeAdm = $request->feSeAdm;  
        }


        if($form_t28->feReg = $request->feReg == ''){
          $form_t28->feReg = '11111111';
          }else{
          $form_t28->feReg = $request->feReg;  
        }

        if($form_t28->save()){
            $bit = new modeloBitacora();
            $bit->user = $_SESSION['id'];
            $bit->accion  = 1;
            $bit->referencia = 'Adjudicación';
            $bit->save();
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

  
    public function edit($id)
    {
        $form_t28 = modeloAdjudicacion::find($id);
        $infoSelect = sel_adjudicacion::all();

        return view('layouts.modificarAdjudicacion', compact('form_t28','infoSelect'));
    }

  
    public function update(Request $request, $id)
    {
        $form_t28=modeloAdjudicacion::find($id);
        $form_t28->codAdq = $request->codAdq;
       

        if($form_t28->codOt2_8 = $request->codOt2_8 == ''){
         $form_t28->codOt2_8 = '0'; 

           }else{
            $form_t28->codOt2_8 = $request->codOt2_8;
           }  

        if($form_t28->nomProan =$request->nomProan == ''){
          $form_t28->nomProan = '1';
          }else{
          $form_t28->nomProan = $request->nomProan;  
        }

        if($form_t28->nomBen = $request->nomBen == ''){
          $form_t28->nomBen = '1';
          }else{
          $form_t28->nomBen = $request->nomBen;  
        }

        if($form_t28->nomAuto = $request->nomAuto == ''){
          $form_t28->nomAuto = '1';
          }else{
          $form_t28->nomAuto = $request->nomAuto;  
        }

        if($form_t28->numSeAdm = $request->numSeAdm == ''){
          $form_t28->numSeAdm = '0';
          }else{
          $form_t28->numSeAdm = $request->numSeAdm;  
        }

        if($form_t28->nomRegn = $request->nomRegn == ''){
          $form_t28->nomRegn = '1';
          }else{
          $form_t28->nomRegn = $request->nomRegn;  
        }

        if($form_t28->tomo = $request->tomo == ''){
          $form_t28->tomo = '1';
          }else{
          $form_t28->tomo = $request->tomo;  
        }

        if($form_t28->folio = $request->folio == ''){
          $form_t28->folio = '0';
          }else{
          $form_t28->folio = $request->folio;  
        }

        if($form_t28->feSeAdm = $request->feSeAdm == ''){
          $form_t28->feSeAdm = '11111111';
          }else{
          $form_t28->feSeAdm = $request->feSeAdm;  
        }


        if($form_t28->feReg = $request->feReg == ''){
          $form_t28->feReg = '11111111';
          }else{
          $form_t28->feReg = $request->feReg;  
        }

        if($form_t28->save()){

        	$bit = new modeloBitacora();
            $bit->user = $_SESSION['id'];
            $bit->accion  = 2;
            $bit->referencia = 'Adjudicación';
            $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
