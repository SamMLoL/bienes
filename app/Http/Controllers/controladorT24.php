<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT24;
use App\mod_selectT24;
use App\modeloBitacora;

class controladorT24 extends Controller
{
   
    public function index()
    {
        
        $infoSelect = mod_selectT24::all();

        $arrayT24 = array(
            array("codOt2_4","CÓDIGO DE ORIGEN:","Introduzca el código de origen","12","col-md-pull-4"),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomDona","NOMBRE DEL DONANTE:","Introduzca nombre del donante","100","col-md-push-0"),
            array("nomBen","NOMBRE DEL BENECIARIO:","Introduzca nombre del beneficiario","100",""),
            array("numConac","NOMBRE DEL CONTRATO O ACTA:","Introduzca el nombre contrato o acta","30",""),
            array("nomRegn","NOMBRE DEL REGISTRO O NOTARÍA:","Introduzca nombre del registro o notaría","30",""),
            array("tomo","TOMO:","Introduzca el tomo del registro","20",""),
            array("folio","FOLIO:","Introduzca el N° de folio","6",""),
            );

        $selectT24= array(
            array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            );

        $dateT24=array(
            array("feConac","FECHA CONTRATO O ACTA","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T24=array(
            array("feReg","FECHA DE REGISTRO","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('tablasForm.t2-4dobmioe', compact('infoSelect','arrayT24','selectT24','dateT24','date2T24'));
    }

    public function store(Request $request)
    {
        $form_t24=new modeloT24();
        $form_t24->codAdq = $request->codAdq;
        $form_t24->revisadot24 = 1;
        $form_t24->anulart24 = 0;

        if($form_t24->codOt2_4 = $request->codOt2_4 == ''){
         $form_t24->codOt2_4 = '0'; 

           }else{
            $form_t24->codOt2_4 = $request->codOt2_4;
           }  

        if($form_t24->nomDona =$request->nomDona == ''){
          $form_t24->nomDona = '1';
          }else{
          $form_t24->nomDona = $request->nomDona;  
        }

        if($form_t24->nomBen = $request->nomBen == ''){
          $form_t24->nomBen = '1';
          }else{
          $form_t24->nomBen = $request->nomBen;  
        }

        if($form_t24->numConac = $request->numConac == ''){
          $form_t24->numConac = '0';
          }else{
          $form_t24->numConac = $request->numConac;  
        }

        if($form_t24->nomRegn = $request->nomRegn == ''){
          $form_t24->nomRegn = '1';
          }else{
          $form_t24->nomRegn = $request->nomRegn;  
        }

        if($form_t24->tomo = $request->tomo == ''){
          $form_t24->tomo = '1';
          }else{
          $form_t24->tomo = $request->tomo;  
        }

        if($form_t24->folio = $request->folio == ''){
          $form_t24->folio = '0';
          }else{
          $form_t24->folio = $request->folio;  
        }

        if($form_t24->feConac = $request->feConac == ''){
          $form_t24->feConac = '11111111';
          }else{
          $form_t24->feConac = $request->feConac;  
        }

        if($form_t24->feReg = $request->feReg == ''){
          $form_t24->feReg = '11111111';
          }else{
          $form_t24->feReg = $request->feReg;  
        }

        if($form_t24->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Anexo T2-4';
          $bit->save();

            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }


    public function edit($id)
    {
        $form_t24 = modeloT24::find($id);
        $migselectT24 = mod_selectT24::all();

       return view('layouts.modificarT2-4',compact('form_t24','migselectT24'));
    }

    public function update(Request $request, $id)
    {
        $form_t24= modeloT24::find($id);
        $form_t24->codAdq = $request->codAdq;
        $form_t24->revisadot24 = 1;
        $form_t24->anulart24 = 0;

        if($form_t24->codOt2_4 = $request->codOt2_4 == ''){
         $form_t24->codOt2_4 = '0'; 

           }else{
            $form_t24->codOt2_4 = $request->codOt2_4;
           }  

        if($form_t24->nomDona =$request->nomDona == ''){
          $form_t24->nomDona = '1';
          }else{
          $form_t24->nomDona = $request->nomDona;  
        }

        if($form_t24->nomBen = $request->nomBen == ''){
          $form_t24->nomBen = '1';
          }else{
          $form_t24->nomBen = $request->nomBen;  
        }

        if($form_t24->numConac = $request->numConac == ''){
          $form_t24->numConac = '0';
          }else{
          $form_t24->numConac = $request->numConac;  
        }

        if($form_t24->nomRegn = $request->nomRegn == ''){
          $form_t24->nomRegn = '1';
          }else{
          $form_t24->nomRegn = $request->nomRegn;  
        }

        if($form_t24->tomo = $request->tomo == ''){
          $form_t24->tomo = '1';
          }else{
          $form_t24->tomo = $request->tomo;  
        }

        if($form_t24->folio = $request->folio == ''){
          $form_t24->folio = '0';
          }else{
          $form_t24->folio = $request->folio;  
        }

        if($form_t24->feConac = $request->feConac == ''){
          $form_t24->feConac = '11111111';
          }else{
          $form_t24->feConac = $request->feConac;  
        }

        if($form_t24->feReg = $request->feReg == ''){
          $form_t24->feReg = '11111111';
          }else{
          $form_t24->feReg = $request->feReg;  
        }

        if($form_t24->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Anexo T2-4';
          $bit->save();

            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

    public function destroy($id)
    {
        //
    }
}
