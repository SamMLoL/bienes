<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDirecta;
use App\sel_directa;
use App\modeloProveedores;
use App\modeloBitacora;


class controladorDirecta extends Controller
{
     public function index()
    {
        //id->name/ placeholder / maxlength / posicion de input
        $infoSelect=sel_directa::all();

        $infoSelect2=modeloProveedores::all();

        $lastCod = modeloDirecta::select('codOt2_1')->get()->last();

        $arrayT21=array(
            array("codOt2_1","Código de Origen:","Introduzca número consecutivo. Ej: B-2; B-3;","12","col-md-pull-8"),
            array("numCom","Número de la Orden de Compra:","Introduzca el número de Orden de compra","30",""),
            array("numNota","Número Nota de Entrega:","Introduzca el Número de la nota de entrega","30",""),
            array("numFac","Número de la Factura:","Introduzca el Número de la factura","30",""),
            );

        $selectT21=array(
            array("codAdq","Código de Adquisición:","col-md-push-4"),
            );

        $selectT22=array(
            array("codProvee","Código del Proveedor:","col-md-push-4"),
            );

        $dateT21=array(
            array("feCom","Fecha de la Orden de Compra:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $dateT211=array(
            array("feNota","Fecha de la Nota de Entrega:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );
        $dateT212=array(
            array("feFac","Fecha de la Factura:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );
        return view('AnexosT.visDirecta', compact('arrayT21','selectT21','selectT22','infoSelect','infoSelect2','dateT21','dateT211','dateT212','lastCod'));
    }

  
    public function store(Request $request)
    {
    

        $form_t21=new modeloDirecta();
        $form_t21->codOt2_1 = $request->codOt2_1;
        $form_t21->codAdq = $request->codAdq;
        $form_t21->codProvee = $request->codProvee;
        $form_t21->revisadot21 = 1;
        
        if($form_t21->codOt2_1 = $request->codOt2_1 == ''){
            $form_t21->codOt2_1 = 'B-1';

            }else{
            $form_t21->codOt2_1 = $request->codOt2_1;    
            }  

        if($form_t21->numCom = $request->numCom == ''){
            $form_t21->numCom = '0';

            }else{
            $form_t21->numCom = $request->numCom;    
            }  

        if($form_t21->numNota = $request->numNota == ''){
            $form_t21->numNota = '0';

            }else{
            $form_t21->numNota = $request->numNota;    
            }

        if($form_t21->numFac = $request->numFac == ''){
            $form_t21->numFac = '0';

            }else{
            $form_t21->numFac = $request->numFac;    
            }

        if($form_t21->feCom = $request->feCom == ''){
            $form_t21->feCom = '11111111';

            }else{
            $form_t21->feCom = $request->feCom;    
            }

        if($form_t21->feNota = $request->feNota == ''){
            $form_t21->feNota = '11111111';

            }else{
            $form_t21->feNota = $request->feNota;    
            }

        if($form_t21->feFac = $request->feFac == ''){
            $form_t21->feFac = '11111111';

            }else{
            $form_t21->feFac = $request->feFac;    
            }

        if($form_t21->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Compra Directa';
          $bit->save();
        }

        return back()->with('msj', 'Datos Registrados Exitosamente');
          
    }


    public function edit($id)
    {
        $form_t21 = modeloDirecta::find($id);
        $infoSelect = sel_directa::all();
        $infoSelect2=modeloProveedores::all();
       
        return view('layouts.ModificarAnexosT.modificarDirecta', compact('form_t21','infoSelect','infoSelect2'));
             
    }

    public function update(Request $request, $id)
    {


        $form_t21=modeloDirecta::find($id);
        $form_t21->codOt2_1 = $request->codOt2_1;
        $form_t21->codAdq = $request->codAdq;
        $form_t21->codProvee = $request->codProvee;
        $form_t21->numCom = $request->numCom;
    

        if($form_t21->numNota = $request->numNota == ''){
            $form_t21->numNota = '0';

            }else{
            $form_t21->numNota = $request->numNota;    
            }

        if($form_t21->numFac = $request->numFac == ''){
            $form_t21->numFac = '0';

            }else{
            $form_t21->numFac = $request->numFac;    
            }

        if($form_t21->feCom = $request->feCom == ''){
            $form_t21->feCom = '11111111';

            }else{
            $form_t21->feCom = $request->feCom;    
            }

        if($form_t21->feNota = $request->feNota == ''){
            $form_t21->feNota = '11111111';

            }else{
            $form_t21->feNota = $request->feNota;    
            }

        if($form_t21->feFac = $request->feFac == ''){
            $form_t21->feFac = '11111111';

            }else{
            $form_t21->feFac = $request->feFac;    
            }

        if($form_t21->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Compra Directa';
          $bit->save();

          return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

        
    }
    
}
