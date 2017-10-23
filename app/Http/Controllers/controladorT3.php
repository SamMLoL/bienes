<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT3;
use App\mod_selectT3;
use App\mod_selectT31;
use App\mod_selectT32;
use App\mod_selectT33;
use App\mod_selectT34;
use App\modeloBitacora;

class controladorT3 extends Controller
{
   
    public function index()
    {

   # id / label / placeholder tabla->t3dsbmioe type="text" / posición: position del select y input >
  $infoSelect = mod_selectT3::all();
  $infoSelect31 = mod_selectT31::all();
  $infoSelect32 = mod_selectT32::all();
  $infoSelect33 = mod_selectT33::all();
  $infoSelect34 = mod_selectT34::all();

  $arrayT3=array(
    array("codRegT3","CÓDIGO DEL REGISTRO:","Introduzca el código de registro","10","col-md-pull-4",""),
    array("otraCom","OTRA COMPAÑÍA ASEGURADORA:","Introduzca otra compañoa aseguradora","100","col-md-push-0",""),
    array("numPoli","NÚMERO DE PÓLIZA:","Indique el N° de la póliza emitido","30","",""),
    array("montoAse","MONTO ASEGURADO:","Indique el monto asegurado","26","","money"),
    array("espMone","ESPECIFIQUE LA MONEDA","Especifique la moneda","Especifique otra moneda","30","",""),
    
    );

  $select= array(
    array("compAse","COMPAÑÍA ASEGURADORA","5","col-md-push-4"),
    );

  $select1= array(
    array("tipPoli","TIPO DE PÓLIZA:","1"),
    );

  $select2= array(
    array("moneda","MONEDA:","5"),
    );

  $select3= array(
    array("poseRes","POSEE RESPONSABILIDAD CIVIL:","2"),
    );

  $select4= array(
    array("tipoCobe","TIPO COBERTURA DE LA PÓLIZA:","5"),
    );


  $datet1=array(
    array("feiniPoli","FECHA INICIO DE PÓLIZA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
    );

  $datet2=array(
    array("fefinPoli","FECHA FIN DE PÓLIZA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
    );

  $arrayT31= array(
  array("espeCobe","ESPECIFIQUE TIPO DE COBERTURA:","Especifique el tipo de cobertura","100","col-md-pull-4"),
  array("descCobe","DESCRIPCIÓN DE LA COBERTURA:","Describa el tipo de cobertura","200","col-md-pull-4"),
  
  );


  return view('tablasForm.t3dsbmioe', compact('infoSelect','infoSelect31','infoSelect32','infoSelect33','infoSelect34','arrayT3','select','select1','select2','select3','select4','datet1','datet2','arrayT31'));

    }


    public function store(Request $request)
    {
        $form_t3= new modeloT3();
        $form_t3->compAse = $request->compAse;
        $form_t3->revisadot3 = 1;
        $form_t3->anulart3 = 0;

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
          $bit->referencia = 'Anexo T-3';
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
        $form_t3 = modeloT3::find($id);
        $migSelectT3 = mod_selectT3::all();
        $migSelectT31 = mod_selectT31::all();
        $migSelectT32 = mod_selectT32::all();

        return view('layouts.modificarT-3', compact('form_t3','migSelectT3','migSelectT31','migSelectT32'));
    }

   
    public function update(Request $request, $id)
    {
        $form_t3= modeloT3::find($id);
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

        if($form_t3->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Anexo T-3';
          $bit->save();
          
            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
