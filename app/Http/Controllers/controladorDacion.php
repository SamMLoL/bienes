<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDacion;
use App\sel_dacion;
use App\modeloBitacora;


class controladorDacion extends Controller
{
    public function index()
    {   
        $infoSelect= sel_dacion::all();

        $lastCod = modeloDacion::select('codOt2_3')->get()->last();

        $arrayT23=array(
            array("codOt2_3","Código de Origen:","Introduzca número consecutivo. Ej: D-2; D-3;","12","col-md-pull-4",""),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomCed","Nombre del Cedente:","Introduzca nombre del cedente","100","col-md-push-0",""),
            array("nomBen","Nombre del Beneficiario:","Introduzca nombre del beneficiario","100","",""),
            array("numFin","Número de Finiquito:","Introduzca N° de finiquito","30","",""),
            array("nomRegn","Nombre del Registro o Notaría:","Introduzca nombre o notaría","100","",""),
            array("tomo","Tomo:","Introduzca el tomo del registro","20","",""),
            array("folio","Folio:","Introduzca el N° de folio","6","","return soloNum(event)"),
            );

        $selectT23=array(
            array("codAdq","Código de la Forma de Adquisición:","col-md-push-4"),
            );

        $dateT23=array(
            array("feFin","Fecha de Finiquito:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T23=array(
            array("feReg","Fecha de Registro:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('AnexosT.visDacion', compact('infoSelect','arrayT23','selectT23','dateT23','date2T23','lastCod'));

    }

    public function store(Request $request)
    {

      $duplicado = modeloDacion::where('codOt2_3', $request->codOt2_3)->get();

        if($duplicado == '[]'){

        $form_t23=new modeloDacion();
        $form_t23->codAdq = $request->codAdq;
        $form_t23->revisadot23 = 1;

         if($form_t23->codOt2_3 = $request->codOt2_3 == ''){
         $form_t23->codOt2_3 = 'D-1'; 

          }else{
          $form_t23->codOt2_3 = $request->codOt2_3;
          }  

        if($form_t23->nomCed =$request->nomCed == ''){
          $form_t23->nomCed = '1';
          }else{
          $form_t23->nomCed = $request->nomCed;  
        }

        if($form_t23->nomBen = $request->nomBen == ''){
          $form_t23->nomBen = '1';
          }else{
          $form_t23->nomBen = $request->nomBen;  
        }

        if($form_t23->numFin = $request->numFin == ''){
          $form_t23->numFin = '0';
          }else{
          $form_t23->numFin = $request->numFin;  
        }

        if($form_t23->nomRegn = $request->nomRegn == ''){
          $form_t23->nomRegn = '1';
          }else{
          $form_t23->nomRegn = $request->nomRegn;  
        }

        if($form_t23->tomo =$request->tomo == ''){
          $form_t23->tomo = '1';
          }else{
          $form_t23->tomo = $request->tomo;  
        }

        if($form_t23->folio = $request->folio == ''){
          $form_t23->folio = '0';
          }else{
          $form_t23->folio = $request->folio;  
        }

        if($form_t23->feFin = $request->feFin == ''){
          $form_t23->feFin = '11111111';
          }else{
          $form_t23->feFin = $request->feFin;  
        }

        if($form_t23->feReg = $request->feReg == ''){
          $form_t23->feReg = '11111111';
          }else{
          $form_t23->feReg = $request->feReg;  
        }

        if($form_t23->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Dación en Pago';
          $bit->save();
          
          }
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else{
          return back()->with('errormsj', 'El Código de Origen "'.$request->codOt2_3.'" ya existe, por favor siga el orden establecido e intente un nuevo código.');
          }
    }      
   

    public function edit($id)
    {
        $form_t23 = modeloDacion::find($id);
        $infoSelect = sel_dacion::all();

       return view('layouts.ModificarAnexosT.modificarDacion',compact('form_t23','infoSelect'));
    }

    public function update(Request $request, $id)
    {
        $form_t23=modeloDacion::find($id);
        $form_t23->codOt2_3 = $request->codOt2_3;
        $form_t23->codAdq = $request->codAdq;


        if($form_t23->nomCed =$request->nomCed == ''){
          $form_t23->nomCed = '1';
          }else{
          $form_t23->nomCed = $request->nomCed;  
        }

        if($form_t23->nomBen = $request->nomBen == ''){
          $form_t23->nomBen = '1';
          }else{
          $form_t23->nomBen = $request->nomBen;  
        }

        if($form_t23->numFin = $request->numFin == ''){
          $form_t23->numFin = '0';
          }else{
          $form_t23->numFin = $request->numFin;  
        }

        if($form_t23->nomRegn = $request->nomRegn == ''){
          $form_t23->nomRegn = '1';
          }else{
          $form_t23->nomRegn = $request->nomRegn;  
        }

        if($form_t23->tomo =$request->tomo == ''){
          $form_t23->tomo = '1';
          }else{
          $form_t23->tomo = $request->tomo;  
        }

        if($form_t23->folio = $request->folio == ''){
          $form_t23->folio = '0';
          }else{
          $form_t23->folio = $request->folio;  
        }

        if($form_t23->feFin = $request->feFin == ''){
          $form_t23->feFin = '11111111';
          }else{
          $form_t23->feFin = $request->feFin;  
        }

        if($form_t23->feReg = $request->feReg == ''){
          $form_t23->feReg = '11111111';
          }else{
          $form_t23->feReg = $request->feReg;  
        }

        if($form_t23->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Dación en Pago';
          $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
