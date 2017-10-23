<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT25;
use App\mod_selectT25;
use App\modeloBitacora;

class controladorT25 extends Controller
{
   
    public function index()
    {
      $infoSelect = mod_selectT25::all();

      $arrayT25 = array(
        array("codOt2_5","CÓDIGO DE ORIGEN:","Introduzca el código de origen","12","col-md-pull-4"),
        #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
        array("nomPan","NOMBRE PROPIETARIO ANTERIOR:","Introduzca nombre del propietario anterior","12","col-md-push-0"),
        array("nomBen","NOMBRE DEL BENECIARIO:","Introduzca nombre del beneficiario","100",""),
        array("nomAut","NOMBRE DE LA AUTORIDAD:","Introduzca nombre de la autoridad","100",""),
        array("numSena","N° DE SENTENCIA O ACTO ADMINISTRATIVO:","Introduzca nombre de la autoridad","100",""),
        array("nomRegn","NOMBRE DEL REGISTRO O NOTARÍA:","Introduzca nombre del registro o notaría","100",""),
        array("tomo","TOMO:","Introduzca el tomo del registro","20",""),
        array("folio","FOLIO:","Introduzca el N° de folio","6",""),
        );

      $selectT25 = array(
        array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
        );

      $dateT25= array(
        array("feSena","FECHA SENTENCIA O ACTO","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

      $date2T25= array(
        array("feReg","FECHA DE REGISTRO","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
        );

      return view('tablasForm.t2-5dobmioe', compact('infoSelect','arrayT25','selectT25','dateT25','date2T25'));

    }


    public function store(Request $request)
    {
        $form_t25=new modeloT25();
        $form_t25->codAdq = $request->codAdq;
        $form_t25->revisadot25 = 1;
        $form_t25->anulart25 = 0;

        if($form_t25->codOt2_5 = $request->codOt2_5 == ''){
         $form_t25->codOt2_5 = '0'; 

           }else{
            $form_t25->codOt2_5 = $request->codOt2_5;
           }  

        if($form_t25->nomPan =$request->nomPan == ''){
          $form_t25->nomPan = '1';
          }else{
          $form_t25->nomPan = $request->nomPan;  
        }

        if($form_t25->nomBen = $request->nomBen == ''){
          $form_t25->nomBen = '1';
          }else{
          $form_t25->nomBen = $request->nomBen;  
        }

        if($form_t25->nomAut = $request->nomAut == ''){
          $form_t25->nomAut = '1';
          }else{
          $form_t25->nomAut = $request->nomAut;  
        }

        if($form_t25->numSena = $request->numSena == ''){
          $form_t25->numSena = '0';
          }else{
          $form_t25->numSena = $request->numSena;  
        }

        if($form_t25->nomRegn = $request->nomRegn == ''){
          $form_t25->nomRegn = '1';
          }else{
          $form_t25->nomRegn = $request->nomRegn;  
        }

        if($form_t25->tomo = $request->tomo == ''){
          $form_t25->tomo = '1';
          }else{
          $form_t25->tomo = $request->tomo;  
        }

        if($form_t25->folio = $request->folio == ''){
          $form_t25->folio = '0';
          }else{
          $form_t25->folio = $request->folio;  
        }

        if($form_t25->feSena = $request->feSena == ''){
          $form_t25->feSena = '11111111';
          }else{
          $form_t25->feSena = $request->feSena;  
        }

        if($form_t25->feReg = $request->feReg == ''){
          $form_t25->feReg = '11111111';
          }else{
          $form_t25->feReg = $request->feReg;  
        }

        if($form_t25->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Anexo T2-5';
          $bit->save();

            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }


    public function edit($id)
    {
        $form_t25 = modeloT25::find($id);
        $migselectT25 = mod_selectT25::all();

       return view('layouts.modificarT2-5',compact('form_t25','migselectT25'));
    }

   
    public function update(Request $request, $id)
    {
        $form_t25= modeloT25::find($id);
        $form_t25->codAdq = $request->codAdq;

        if($form_t25->codOt2_5 = $request->codOt2_5 == ''){
         $form_t25->codOt2_5 = '0'; 

           }else{
            $form_t25->codOt2_5 = $request->codOt2_5;
           }  

        if($form_t25->nomPan =$request->nomPan == ''){
          $form_t25->nomPan = '1';
          }else{
          $form_t25->nomPan = $request->nomPan;  
        }

        if($form_t25->nomBen = $request->nomBen == ''){
          $form_t25->nomBen = '1';
          }else{
          $form_t25->nomBen = $request->nomBen;  
        }

        if($form_t25->nomAut = $request->nomAut == ''){
          $form_t25->nomAut = '1';
          }else{
          $form_t25->nomAut = $request->nomAut;  
        }

        if($form_t25->numSena = $request->numSena == ''){
          $form_t25->numSena = '0';
          }else{
          $form_t25->numSena = $request->numSena;  
        }

        if($form_t25->nomRegn = $request->nomRegn == ''){
          $form_t25->nomRegn = '1';
          }else{
          $form_t25->nomRegn = $request->nomRegn;  
        }

        if($form_t25->tomo = $request->tomo == ''){
          $form_t25->tomo = '1';
          }else{
          $form_t25->tomo = $request->tomo;  
        }

        if($form_t25->folio = $request->folio == ''){
          $form_t25->folio = '0';
          }else{
          $form_t25->folio = $request->folio;  
        }

        if($form_t25->feSena = $request->feSena == ''){
          $form_t25->feSena = '11111111';
          }else{
          $form_t25->feSena = $request->feSena;  
        }

        if($form_t25->feReg = $request->feReg == ''){
          $form_t25->feReg = '11111111';
          }else{
          $form_t25->feReg = $request->feReg;  
        }

        if($form_t25->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Anexo T2-5';
          $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

   
    
}
