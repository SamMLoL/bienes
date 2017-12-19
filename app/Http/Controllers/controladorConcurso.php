<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloConcurso;
use App\sel_concurso;
use App\modeloBitacora;

class controladorConcurso extends Controller
{
    public function index()
    {

        $infoSelect=sel_concurso::all();

        $lastCod = modeloConcurso::select('codOrigen')->get()->last();

        # for/id/name label /placeholder 
        $arrayt2=array(
            array("codOrigen","Código de Origen:","Introduzca número consecutivo. Ej: A-2; A-3;","12","col-md-pull-4"),
            #array("codAdquisicion","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","Introduzca el código de adquisición"),
            array("nomConcurso","Nombre del Concurso:","Introduzca nombre del concurso","255","col-md-push-0"),
            array("numConcurso","Número del Concurso:","Introduzca el N° del concurso","30",""),
            array("codProveedor","Código de Proveedor:","Introduzca código del proveedor","10",""),
            array("numContrato","Número de Contrato:","Introduzca el N° de contrato","30",""),
            array("numNotaEntre","Número de la Nota de Entrega:","Introduzca el número de la nota de entrega","30",""),
            array("numFactura","Número de la Factura:","Introduzca el N° de factura","30",""),
            );

        $datet2=array(
            array("feConcurso","Fecha de Concurso:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2t2=array(
            array("feContrato","Fecha del Contrato:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date3t2=array(
           array("feNotaEntre","Fecha de la Nota de Entrega:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
           array("feFactura","Fecha de la Factura:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"), /*ESTE GENERALMENTE SE TENDRIA QUE CREAR UN ARRAY APARTE PARA MOSTRAR LA FECHA EN LA ULTIMA POSICIÓN YA QUE LA RETROCEDIO UNA ESPECIFICAMENTE PARA SER MÁS CLARO EN LA POSICIÓN DE INPUT*/
            );

        $selectT2=array(
           array("codAdquisicion","Código de la Forma de adquisición:","col-md-push-4"),
            );

           return view('tablasForm.visConcurso', compact('infoSelect','arrayt2','datet2','date2t2','date3t2','selectT2','lastCod'));
    }

    public function store(Request $request)
    {

        $form_t2= new modeloConcurso();
        $form_t2->codAdquisicion = $request->codAdquisicion; 
        $form_t2->revisadot2 = 1;

#Si el campo en el fomulario se deja en blanco cumple la condición
        if ($form_t2->codOrigen = $request->codOrigen == ''){
        $form_t2->codOrigen = 'A-1';

            }else{
            $form_t2->codOrigen = $request->codOrigen;  
        }

        if ($form_t2->nomConcurso = $request->nomConcurso == ''){
        $form_t2->nomConcurso = '1';

            }else{
            $form_t2->nomConcurso = $request->nomConcurso;  
        }

        if ($form_t2->numConcurso = $request->numConcurso == ''){
        $form_t2->numConcurso = '0';    
        
            }else{
            $form_t2->numConcurso = $request->numConcurso;  
        }

        if ($form_t2->feConcurso = $request->feConcurso == '') {
        $form_t2->feConcurso = '11111111';
      
            }else{
             $form_t2->feConcurso = $request->feConcurso;
            }

        if ($form_t2->codProveedor = $request->codProveedor == ''){
        $form_t2->codProveedor = '0';

            }else{
        $form_t2->codProveedor = $request->codProveedor;
        }

        if ($form_t2->numContrato = $request->numContrato == ''){
        $form_t2->numContrato = '0';

            }else{
            $form_t2->numContrato = $request->numContrato;
        }

        if ($form_t2->feContrato = $request->feContrato == '') {
        $form_t2->feContrato = '11111111';
      
            }else{
             $form_t2->feContrato = $request->feContrato;
            }

        if($form_t2->numNotaEntre = $request->numNotaEntre == ''){
        $form_t2->numNotaEntre = '0';

            }else{
            $form_t2->numNotaEntre = $request->numNotaEntre;
        }

        if ($form_t2->feNotaEntre = $request->feNotaEntre == '') {
        $form_t2->feNotaEntre = '11111111';
      
             }else{
             $form_t2->feNotaEntre = $request->feNotaEntre;
             }

        if ($form_t2->numFactura = $request->numFactura == ''){
        $form_t2->numFactura = '0';

             }else{
             $form_t2->numFactura = $request->numFactura;
        }

        if ($form_t2->feFactura = $request->feFactura == '') {
        $form_t2->feFactura = '11111111';
      
             }else{
             $form_t2->feFactura = $request->feFactura;
             }

        if($form_t2->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Compra por Concurso';
          $bit->save();

        }

        return back()->with('msj', 'Datos Registrados Exitosamente');
            

    }

    public function edit($id)
    {
        $form_t2 = modeloConcurso::find($id);
        $infoSelect = sel_concurso::all();
        
        return view('layouts.modificarConcurso', compact('form_t2','infoSelect'));
    }

    public function update(Request $request, $id)
      {
        $form_t2= modeloConcurso::find($id);

        $form_t2->codOrigen = $request->codOrigen; 
        $form_t2->codAdquisicion = $request->codAdquisicion; 
#Si el campo en el fomulario se deja en blanco cumple la condición

    
        if ($form_t2->nomConcurso = $request->nomConcurso == ''){
        $form_t2->nomConcurso = '1';

            }else{
            $form_t2->nomConcurso = $request->nomConcurso;  
        }

        if ($form_t2->numConcurso = $request->numConcurso == ''){
        $form_t2->numConcurso = '0';    
        
            }else{
            $form_t2->numConcurso = $request->numConcurso;  
        }

        if ($form_t2->feConcurso = $request->feConcurso == '') {
        $form_t2->feConcurso = '11111111';
      
            }else{
             $form_t2->feConcurso = $request->feConcurso;
            }

        if ($form_t2->codProveedor = $request->codProveedor == ''){
        $form_t2->codProveedor = '0';

            }else{
        $form_t2->codProveedor = $request->codProveedor;
        }

        if ($form_t2->numContrato = $request->numContrato == ''){
        $form_t2->numContrato = '0';

            }else{
            $form_t2->numContrato = $request->numContrato;
        }

        if ($form_t2->feContrato = $request->feContrato == '') {
        $form_t2->feContrato = '11111111';
      
            }else{
             $form_t2->feContrato = $request->feContrato;
            }

        if($form_t2->numNotaEntre = $request->numNotaEntre == ''){
        $form_t2->numNotaEntre = '0';

            }else{
            $form_t2->numNotaEntre = $request->numNotaEntre;
        }

        if ($form_t2->feNotaEntre = $request->feNotaEntre == '') {
        $form_t2->feNotaEntre = '11111111';
      
             }else{
             $form_t2->feNotaEntre = $request->feNotaEntre;
             }

        if ($form_t2->numFactura = $request->numFactura == ''){
        $form_t2->numFactura = '0';

             }else{
             $form_t2->numFactura = $request->numFactura;
        }

        if ($form_t2->feFactura = $request->feFactura == '') {
        $form_t2->feFactura = '11111111';
      
             }else{
             $form_t2->feFactura = $request->feFactura;
             }
    
        if($form_t2->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Compra por Concurso';
          $bit->save();

            return back()->with('msj', 'Datos modificados exitosamente');
        } else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

      }
 
}
