<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT23;
use App\mod_selectT23;

class controladorT23 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $infoSelect= mod_selectT23::all();

        $arrayT23=array(
            array("codOt2_3","CÓDIGO DE ORIGEN:","Introduzca el código de origen","12","col-md-pull-4"),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            array("nomCed","NOMBRE DEL CEDENTE:","Introduzca nombre del cedente","100","col-md-push-0"),
            array("nomBen","NOMBRE DEL BENEFICIARIO:","Introduzca nombre del beneficiario","100",""),
            array("numFin","NÚMERO DE FINIQUITO:","Introduzca N° de finiquito","30",""),
            array("nomRegn","NOMBRE REGISTRO O NOTARÍA:","Introduzca nombre o notaría","100",""),
            array("tomo","TOMO:","Introduzca el tomo del registro","20",""),
            array("folio","FOLIO:","Introduzca el N° de folio","6",""),
            );

        $selectT23=array(
            array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            );

        $dateT23=array(
            array("feFin","FECHA DE FINIQUITO","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2T23=array(
            array("feReg","FECHA DE REGISTRO","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        return view('tablasForm.t2-3dobmioeraa', compact('infoSelect','arrayT23','selectT23','dateT23','date2T23'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_t23=new modeloT23();
        $form_t23->codAdq = $request->codAdq;
        $form_t23->revisadot23 = 1;
        $form_t23->anulart23 = 0;

         if($form_t23->codOt2_3 = $request->codOt2_3 == ''){
         $form_t23->codOt2_3 = '0'; 

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
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

    public function edit($id)
    {
        $form_t23 = modeloT23::find($id);
        $migselectT23 = mod_selectT23::all();

       return view('layouts.modificarT2-3',compact('form_t23','migselectT23'));
    }

    public function update(Request $request, $id)
    {
        $form_t23=modeloT23::find($id);
        $form_t23->codAdq = $request->codAdq;
        $form_t23->revisadot23 = 1;
        $form_t23->anulart23 = 0;

         if($form_t23->codOt2_3 = $request->codOt2_3 == ''){
         $form_t23->codOt2_3 = '0'; 

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
