<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloSeguros;
use App\sel_seguros;
use App\sel_seguros1;
use App\sel_seguros2;
use App\sel_seguros3;
use App\sel_seguros4;
use App\modeloBitacora;



class controladorSeguros extends Controller
{
     public function index()
    {

   # id / label / placeholder tabla->t3dsbmioe type="text" / posición: position del select y input >
  $infoSelect = sel_seguros::all();
  $infoSelect1 = sel_seguros1::all();
  $infoSelect2 = sel_seguros2::all();
  $infoSelect3 = sel_seguros3::all();
  $infoSelect4 = sel_seguros4::all();

  $arrayT3=array(
    array("codRegT3","Código del Registro:","Introduzca el código de registro","10","col-md-pull-4",""),
    array("otraCom","Otra Compañía Aseguradora:","Introduzca otra compañoa aseguradora","100","col-md-push-0",""),
    array("numPoli","Número de Póliza:","Indique el N° de la póliza emitido","30","",""),
    array("montoAse","Monto Asegurado:","Indique el monto asegurado","26","","money"),
    array("espMone","Especifique la Moneda:","Especifique la moneda:","Especifique otra moneda","30","",""),
    
    );

  $select= array(
    array("compAse","Compañía Aseguradora:","5","col-md-push-4"),
    );

  $select1= array(
    array("tipPoli","Tipo de Póliza:","1"),
    );

  $select2= array(
    array("moneda","Moneda:","5"),
    );

  $select3= array(
    array("poseRes","Posee Responsabilidad Civil:","2"),
    );

  $select4= array(
    array("tipoCobe","Tipo Cobertura de la Póliza:","5"),
    );


  $datet1=array(
    array("feiniPoli","Fecha Inicio de la Póliza:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
    );

  $datet2=array(
    array("fefinPoli","Fecha Fin de la Póliza:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
    );

  $arrayT31= array(
  array("espeCobe","Especifique el Tipo de Cobertura:","Especifique el tipo de cobertura","100","col-md-push-4"),
  array("descCobe","Descripción de la Cobertura:","Describa el tipo de cobertura","200","col-md-pull-4"),
  
  );


  return view('tablasForm.visSeguros', compact('infoSelect','infoSelect1','infoSelect2','infoSelect3','infoSelect4','arrayT3','select','select1','select2','select3','select4','datet1','datet2','arrayT31'));

    }


    public function store(Request $request)
    {
        $form_t3= new modeloSeguros();
        $form_t3->compAse = $request->compAse;
        $form_t3->revisadot3 = 1;

        if($form_t3->codRegT3 = $request->codRegT3 == ''){
         $form_t3->codRegT3 = '0'; 

        }else{
         $form_t3->codRegT3 = $request->codRegT3;
        }  

        if($form_t3->otraCom =$request->otraCom == ''){
          $form_t3->otraCom = '1';
          }else{
          $form_t3->otraCom = $request->otraCom;  
        }

        if($form_t3->numPoli = $request->numPoli == ''){
          $form_t3->numPoli = '0';
          }else{
          $form_t3->numPoli = $request->numPoli;  
        }

          $form_t3->tipPoli = $request->tipPoli;  
    

        if($form_t3->montoAse = $request->montoAse == ''){
          $form_t3->montoAse = '0';
          }else{
          $form_t3->montoAse = $request->montoAse;  
        }

          $form_t3->moneda = $request->moneda;


        if($form_t3->espMone = $request->espMone == ''){
          $form_t3->espMone = '1';
          }else{
          $form_t3->espMone = $request->espMone;  
        }


        if($form_t3->feiniPoli = $request->feiniPoli == ''){
          $form_t3->feiniPoli = '11111111';
          }else{
          $form_t3->feiniPoli = $request->feiniPoli;  
        }

        if($form_t3->fefinPoli = $request->fefinPoli == ''){
          $form_t3->fefinPoli = '11111111';
          }else{
          $form_t3->fefinPoli = $request->fefinPoli;  
        }

          $form_t3->poseRes = $request->poseRes;

          $form_t3->tipoCobe = $request->tipoCobe;

          if($form_t3->espeCobe = $request->espeCobe == ''){
         $form_t3->espeCobe = '1'; 

           }else{
            $form_t3->espeCobe = $request->espeCobe;
           }  

        if($form_t3->descCobe =$request->descCobe == ''){
          $form_t3->descCobe = '1';
          
           }else{
            $form_t3->descCobe = $request->descCobe;  
           }

        if($form_t3->save()){

          //Función para mostrar la bitacora de las acciones de los usuarios tabla BD: bitacora , acciones.
          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Seguros';
          $bit->save();


            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }

    public function enviarVariable(){

      $bitacora = modeloBitacora::all();

      return view('bitacora.bitacora', compact('bitacora'));

    }

    public function edit($id)
    {
        $form_t3 = modeloSeguros::find($id);
        $infoSelect = sel_seguros::all();
  		$infoSelect1 = sel_seguros1::all();
  		$infoSelect2 = sel_seguros2::all();
  		$infoSelect3 = sel_seguros3::all();
  		$infoSelect4 = sel_seguros4::all();

        return view('layouts.modificarSeguros', compact('form_t3','infoSelect','infoSelect1','infoSelect2','infoSelect3','infoSelect4'));
    }

   
    public function update(Request $request, $id)
    {
        $form_t3= modeloSeguros::find($id);
        $form_t3->compAse = $request->compAse;
        
        if($form_t3->codRegT3 = $request->codRegT3 == ''){
         $form_t3->codRegT3 = '0'; 

           }else{
            $form_t3->codRegT3 = $request->codRegT3;
           }  

        if($form_t3->otraCom =$request->otraCom == ''){
          $form_t3->otraCom = '1';
            }else{
            $form_t3->otraCom = $request->otraCom;  
        }

        if($form_t3->numPoli = $request->numPoli == ''){
          $form_t3->numPoli = '0';
          }else{
          $form_t3->numPoli = $request->numPoli;  
        }

          $form_t3->tipPoli = $request->tipPoli;  
    

        if($form_t3->montoAse = $request->montoAse == ''){
          $form_t3->montoAse = '0';
          }else{
          $form_t3->montoAse = $request->montoAse;  
        }

          $form_t3->moneda = $request->moneda;


        if($form_t3->espMone = $request->espMone == ''){
          $form_t3->espMone = '1';
          }else{
          $form_t3->espMone = $request->espMone;  
        }

        if($form_t3->feiniPoli = $request->feiniPoli == ''){
          $form_t3->feiniPoli = '11111111';
          }else{
          $form_t3->feiniPoli = $request->feiniPoli;  
        }


        if($form_t3->fefinPoli = $request->fefinPoli == ''){
          $form_t3->fefinPoli = '11111111';
          }else{
          $form_t3->fefinPoli = $request->fefinPoli;  
        }

        $form_t3->poseRes = $request->poseRes;

        $form_t3->tipoCobe = $request->tipoCobe;

        if($form_t3->espeCobe = $request->espeCobe == ''){
          $form_t3->espeCobe = '1';
          }else{
          $form_t3->espeCobe = $request->espeCobe;  
        }

        if($form_t3->descCobe = $request->descCobe == ''){
          $form_t3->descCobe = '1';
          }else{
          $form_t3->descCobe = $request->descCobe;  
        }
        

        if($form_t3->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Seguros';
          $bit->save();
          
            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
