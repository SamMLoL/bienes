<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT22;
use App\mod_selectT22;

class controladorT22 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $infoSelect= mod_selectT22::all();

        $arrayT22=array(
            array("codOt2_2","CÓDIGO DE ORIGEN:","Introduzca el código de origen","12","col-md-pull-4"),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomPa","NOMBRE PROPIETARIO ANTERIOR:","Introduzca nombre del propietario","100","col-md-push-0"),
            array("nomBen","NOMBRE DEL BENEFICIARIO:","Introduzca nombre del propietario","100",""),
            array("nomAuto","NOMBRE DE LA AUTORIDAD:","Introduzca nombre de la autoridad","100",""),
            array("numSenc","N° DE SENTENCIA DE CONFISCACIÓN:","Introduzca nombre de la autoridad","100",""),
            array("nomRegno","NOMBRE REGISTRO O NOTARÍA:","Introduzca nombre o notaría","100",""),
            array("tomo","TOMO:","Introduzca el tomo del registro","20",""),
            array("folio","FOLIO:","Introduzca el N° de folio","6",""),
            );

        $selectT22=array(
            array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            );

        $dateT22=array(
            array("feSenc","FECHA SENTENCIA CONFISCACIÓN:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T22=array(
            array("feReg","FECHA DE REGISTRO:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('tablasForm.t2-2dobmioeraa', compact('infoSelect','selectT22','arrayT22','dateT22','date2T22'));
    }

  
    public function store(Request $request)
    {
        $form_t22=new modeloT22();
        $form_t22->codAdq = $request->codAdq;
        $form_t22->revisadot22 = 1;
        $form_t22->anulart22 = 0;

         if($form_t22->codOt2_2 = $request->codOt2_2 == ''){
         $form_t22->codOt2_2 = '0'; 

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
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

    public function edit($id)
    {
         {
        $form_t22 = modeloT22::find($id);
        $migselectT22 = mod_selectT22::all();
       
        return view('layouts.modificarT2-2', compact('form_t22','migselectT22'));
             
    }
    }

    public function update(Request $request, $id)
    {
        
        $form_t22=modeloT22::find($id);
        $form_t22->codAdq = $request->codAdq;
        $form_t22->revisadot22 = 1;
        $form_t22->anulart22 = 0;

         if($form_t22->codOt2_2 = $request->codOt2_2 == ''){
         $form_t22->codOt2_1 = '0'; 

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
            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

   
    public function destroy($id)
    {
        //
    }
}
