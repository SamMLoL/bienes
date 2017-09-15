<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT27;
use App\mod_selectT27;

class controladorT27 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoSelect = mod_selectT27::all();

        $arrayT27 = array(
            array("codOt2_7","CÓDIGO DE ORIGEN:","Introduzca el código de origen","12","col-md-pull-4"),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomQtra","NOMBRE DE QUIEN TRANSFIERE:","Introduzca nombre del quien transfiere","200","col-md-push-0"),
            array("nomBen","NOMBRE DEL BENEFICIARIO:","Introduzca nombre del beneficiario (quien recibe)","200",""),
            array("numAuto","NÚMERO DE LA AUTORIAZACIÓN:","Introduzca el número de la autorización","30",""),
            array("nomRegn","NOMBRE DEL REGISTRO O NOTARÍA:","Introduzca nombre del registro o notaría","100",""),
            array("tomo","TOMO:","Introduzca el tomo del registro","20",""),
            array("folio","FOLIO:","Introduzca el N° de folio","6",""),
            );

        $selectT27 = array(
        array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
        );

        $dateT27 = array(
            array("feLic","FECHA DE LA AUTORIAZACIÓN:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T27 = array(
            array("feLic","FECHA DEL REGISTRO:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('tablasForm.t2-7dobmioe', compact('infoSelect','arrayT27','selectT27','dateT27','date2T27'));
    }

   
    public function store(Request $request)
    {
        $form_t27= new modeloT27();
        $form_t27->codAdq = $request->codAdq;
        $form_t27->revisadot27 = 1;
        $form_t27->anulart27 = 0;

        if($form_t27->codOt2_7 = $request->codOt2_7 == ''){
         $form_t27->codOt2_7 = '0'; 

           }else{
            $form_t27->codOt2_7 = $request->codOt2_7;
           }  

        if($form_t27->nomQtra =$request->nomQtra == ''){
          $form_t27->nomQtra = '1';
          }else{
          $form_t27->nomQtra = $request->nomQtra;  
        }

        if($form_t27->nomBen = $request->nomBen == ''){
          $form_t27->nomBen = '1';
          }else{
          $form_t27->nomBen = $request->nomBen;  
        }

        if($form_t27->numAuto = $request->numAuto == ''){
          $form_t27->numAuto = '0';
          }else{
          $form_t27->numAuto = $request->numAuto;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->tomo = $request->tomo == ''){
          $form_t27->tomo = '1';
          }else{
          $form_t27->tomo = $request->tomo;  
        }

        if($form_t27->folio = $request->folio == ''){
          $form_t27->folio = '0';
          }else{
          $form_t27->folio = $request->folio;  
        }

        if($form_t27->feAuto = $request->feAuto == ''){
          $form_t27->feAuto = '11111111';
          }else{
          $form_t27->feAuto = $request->feAuto;  
        }


        if($form_t27->feReg = $request->feReg == ''){
          $form_t27->feReg = '11111111';
          }else{
          $form_t27->feReg = $request->feReg;  
        }

        if($form_t27->save()){
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
    

    public function edit($id)
    {
        $form_t27 = modeloT27::find($id);
        $migSelectT27 = mod_selectT27::all();

        return view('layouts.modificarT2-7', compact('form_t27','migSelectT27'));
    }

   
    public function update(Request $request, $id)
    {
        $form_t27= modeloT27::find($id);
        $form_t27->codAdq = $request->codAdq;

        if($form_t27->codOt2_7 = $request->codOt2_7 == ''){
         $form_t27->codOt2_7 = '0'; 

           }else{
            $form_t27->codOt2_7 = $request->codOt2_7;
           }  

        if($form_t27->nomQtra =$request->nomQtra == ''){
          $form_t27->nomQtra = '1';
          }else{
          $form_t27->nomQtra = $request->nomQtra;  
        }

        if($form_t27->nomBen = $request->nomBen == ''){
          $form_t27->nomBen = '1';
          }else{
          $form_t27->nomBen = $request->nomBen;  
        }

        if($form_t27->numAuto = $request->numAuto == ''){
          $form_t27->numAuto = '0';
          }else{
          $form_t27->numAuto = $request->numAuto;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->nomRegn = $request->nomRegn == ''){
          $form_t27->nomRegn = '1';
          }else{
          $form_t27->nomRegn = $request->nomRegn;  
        }

        if($form_t27->tomo = $request->tomo == ''){
          $form_t27->tomo = '1';
          }else{
          $form_t27->tomo = $request->tomo;  
        }

        if($form_t27->folio = $request->folio == ''){
          $form_t27->folio = '0';
          }else{
          $form_t27->folio = $request->folio;  
        }

        if($form_t27->feAuto = $request->feAuto == ''){
          $form_t27->feAuto = '11111111';
          }else{
          $form_t27->feAuto = $request->feAuto;  
        }


        if($form_t27->feReg = $request->feReg == ''){
          $form_t27->feReg = '11111111';
          }else{
          $form_t27->feReg = $request->feReg;  
        }

        if($form_t27->save()){
            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

    
}
