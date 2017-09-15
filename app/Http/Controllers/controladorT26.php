<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT26;
use App\mod_selectT26;

class controladorT26 extends Controller
{
    
    public function index()
    {
        $infoSelect = mod_selectT26::all();

        $arrayT26 = array(
            array("codOt2_5","CÓDIGO DE ORIGEN:","Introduzca el código de origen","12","col-md-pull-4"),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomCope","NOMBRE DEL COPERMUTANTE:","Introduzca nombre del copermutante","100","col-md-push-0"),
            array("nomBen","NOMBRE DEL BENEFICIARIO:","Introduzca nombre del beneficiario","100",""),
            array("nomLic","NOMBRE DE LA LICITACIÓN:","Introduzca nombre de la licitación","100",""),
            array("numLic","N° DE LA LICITACIÓN:","Introduzca el N° licitación","100",""),
            array("numCon","N° DEL CONTRATO:","Introduzca el N° de contrato","30",""),
            array("nomRegn","NOMBRE DEL REGISTRO O NOTARÍA:","Introduzca nombre del registro o notaría","100",""),
            array("tomo","TOMO:","Introduzca el tomo del registro","20",""),
            array("folio","FOLIO:","Introduzca el N° de folio","6",""),
            );

        $selectT26 = array(
        array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
        );

        $dateT26= array(
        array("feLic","FECHA DE LICITACIÓN:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

        $date2T26= array(
        array("feCon","FECHA DEL CONTRATO:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

        $date3T26= array(
        array("feReg","FECHA DEL REGISTRO:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

        return view('tablasForm.t2-6dobmioe', compact('infoSelect','arrayT26','selectT26','dateT26','date2T26','date3T26'));
    }

    public function store(Request $request)
    {
        $form_t26= new modeloT26();
        $form_t26->codAdq = $request->codAdq;
        $form_t26->revisadot26 = 1;
        $form_t26->anulart26 = 0;

        if($form_t26->codOt2_6 = $request->codOt2_6 == ''){
         $form_t26->codOt2_6 = '0'; 

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
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

 
    public function edit($id)
    {
        $form_t26 = modeloT26::find($id);
        $migSelectT26 = mod_selectT26::all();

        return view('layouts.modificarT2-6', compact('form_t26','migSelectT26'));
    }

 
    public function update(Request $request, $id)
    {
        $form_t26= modeloT26::find($id);
        $form_t26->codAdq = $request->codAdq;

        if($form_t26->codOt2_6 = $request->codOt2_6 == ''){
         $form_t26->codOt2_6 = '0'; 

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
            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
