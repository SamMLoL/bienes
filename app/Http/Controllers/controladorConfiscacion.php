<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloConfiscacion;
use App\sel_confiscacion;
use App\modeloBitacora;


class controladorConfiscacion extends Controller
{
     public function index()
     {
        
        $infoSelect= sel_confiscacion::all();

        $lastCod = modeloConfiscacion::select('codOt2_2')->get()->last();

        $arrayT22=array(
            array("codOt2_2","Código de Origen:","Introduzca número consecutivo. Ej: C-2; C-3;","12","col-md-pull-4",""),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomPa","Nombre del Propietario Anterior:","Introduzca nombre del propietario","100","col-md-push-0",""),
            array("nomBen","Nombre del Beneficiario:","Introduzca nombre del propietario","100","",""),
            array("nomAuto","Nombre de la Autoridad:","Introduzca nombre de la autoridad","100","",""),
            array("numSenc","Número Sentencia de Confiscación:","Introduzca el número de la autoridad","30","",""),
            array("nomRegno","Nombre del Registro o Notaría:","Introduzca nombre o notaría","100","",""),
            array("tomo","Tomo:","Introduzca el tomo del registro","20","",""),
            array("folio","Folio:","Introduzca el N° de folio","6","","return soloNum(event)"),
            );

        $selectT22=array(
            array("codAdq","Código de la Forma de Adquisición:","col-md-push-4"),
            );

        $dateT22=array(
            array("feSenc","Fecha Sentencia de Confiscación:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T22=array(
            array("feReg","Fecha de Registro:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('tablasForm.visConfiscacion', compact('infoSelect','selectT22','arrayT22','dateT22','date2T22','lastCod'));
    }

  
    public function store(Request $request)
    {

        $form_t22=new modeloConfiscacion();
        $form_t22->codAdq = $request->codAdq;
        $form_t22->revisadot22 = 1;

         if($form_t22->codOt2_2 = $request->codOt2_2 == ''){
         $form_t22->codOt2_2 = 'C-1'; 

           }else{
            $form_t22->codOt2_2 = $request->codOt2_2;
           }  

        if($form_t22->nomPa =$request->nomPa == ''){
          $form_t22->nomPa = '1';
          }else{
          $form_t22->nomPa = $request->nomPa;  
        }

        if($form_t22->nomBen = $request->nomBen == ''){
          $form_t22->nomBen = '1';
          }else{
          $form_t22->nomBen = $request->nomBen;  
        }

        if($form_t22->nomAuto = $request->nomAuto == ''){
          $form_t22->nomAuto = '1';
          }else{
          $form_t22->nomAuto = $request->nomAuto;  
        }

        if($form_t22->numSenc = $request->numSenc == ''){
          $form_t22->numSenc = '0';
          }else{
          $form_t22->numSenc = $request->numSenc;  
        }

        if($form_t22->nomRegno =$request->nomRegno == ''){
          $form_t22->nomRegno = '1';
          }else{
          $form_t22->nomRegno = $request->nomRegno;  
        }

        if($form_t22->tomo = $request->tomo == ''){
          $form_t22->tomo = '1';
          }else{
          $form_t22->tomo = $request->tomo;  
        }

        if($form_t22->folio = $request->folio == ''){
          $form_t22->folio = '0';
          }else{
          $form_t22->folio = $request->folio;  
        }

        if($form_t22->feSenc = $request->feSenc == ''){
          $form_t22->feSenc = '11111111';
          }else{
          $form_t22->feSenc = $request->feSenc;  
        }

        if($form_t22->feReg = $request->feReg == ''){
          $form_t22->feReg = '11111111';
          }else{
          $form_t22->feReg = $request->feReg;  
        }

        if($form_t22->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Confiscación';
          $bit->save();
          }
            
          return back()->with('msj', 'Datos Registrados Exitosamente');
             
    }      

    public function edit($id)
    {
        
        $form_t22 = modeloConfiscacion::find($id);
        $infoSelect = sel_confiscacion::all();
       
        return view('layouts.modificarConfiscacion', compact('form_t22','infoSelect'));
             
    
    }

    public function update(Request $request, $id)
    {
        
        $form_t22=modeloConfiscacion::find($id);
        $form_t22->codOt2_2 = $request->codOt2_2;
        $form_t22->codAdq = $request->codAdq;
        

        if($form_t22->nomPa =$request->nomPa == ''){
          $form_t22->nomPa = '1';
          }else{
          $form_t22->nomPa = $request->nomPa;  
        }

        if($form_t22->nomBen = $request->nomBen == ''){
          $form_t22->nomBen = '1';
          }else{
          $form_t22->nomBen = $request->nomBen;  
        }

        if($form_t22->nomAuto = $request->nomAuto == ''){
          $form_t22->nomAuto = '1';
          }else{
          $form_t22->nomAuto = $request->nomAuto;  
        }

        if($form_t22->numSenc = $request->numSenc == ''){
          $form_t22->numSenc = '0';
          }else{
          $form_t22->numSenc = $request->numSenc;  
        }

        if($form_t22->nomRegno =$request->nomRegno == ''){
          $form_t22->nomRegno = '1';
          }else{
          $form_t22->nomRegno = $request->nomRegno;  
        }

        if($form_t22->tomo = $request->tomo == ''){
          $form_t22->tomo = '1';
          }else{
          $form_t22->tomo = $request->tomo;  
        }

        if($form_t22->folio = $request->folio == ''){
          $form_t22->folio = '0';
          }else{
          $form_t22->folio = $request->folio;  
        }

        if($form_t22->feSenc = $request->feSenc == ''){
          $form_t22->feSenc = '11111111';
          }else{
          $form_t22->feSenc = $request->feSenc;  
        }

        if($form_t22->feReg = $request->feReg == ''){
          $form_t22->feReg = '11111111';
          }else{
          $form_t22->feReg = $request->feReg;  
        }

        if($form_t22->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Confiscación';
          $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
