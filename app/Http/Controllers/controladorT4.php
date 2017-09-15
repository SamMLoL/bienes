<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT4;
use App\mod_selectT4;
use App\mod_selectT41;

class controladorT4 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    # for/id/name label /placeholder tabla->t4 type="text">
        $infoSelect = mod_selectT4::all();
        $infoSelect41 = mod_selectT41::all();

        $arrayt4=array(
            array("codResp","CÓDIGO DEL RESPONSABLE:","Introduzca el código del responsable","10","col-md-pull-4","",""),         
            array("cedula","CEDULA DE IDENTIDAD:","Introduzca el N° de cédula de identidad","8",'col-md-push-0',"return soloNum(event)",""),         
            array("nomRes","NOMBRE DE RESPONSABLE:","Introduzca el nombre del responsable","100","","",""),         
            array("apeRes","APELLIDO DE RESPONSABLE:","Introduzca el apellido del responsable","100","","",""),         
            array("telfRes","TELÉFONO DE RESPONSABLE:","Introduzca el teléfono del responsable","20","","return soloNum(event)","telefono"),         
            array("cargoRes","CARGO DEL RESPONSABLE:","Introduzca el apellido del responsable","200","","",""),         
            array("correRes","CORREO ELECTRÓNICO RESPONSABLE:","Introduzca el apellido del responsable","200","","",""),         
            );

        $select = array(
            array("tipoResp","TIPO DE RESPONSABLE:","2","col-md-push-4"),
            );

        $select2 = array(
            array("depAdmRes","DEPENDENCIA ADMINISTRATIVA:","2"),
            );

        return view('tablasForm.t4dobmioe', compact('infoSelect','infoSelect41','arrayt4','select','select2'));
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
        $form_t4 = new modeloT4();
        $form_t4->codResp = $request->codResp;
        $form_t4->tipoResp = $request->tipoResp;
        $form_t4->depAdmRes = $request->depAdmRes;
        $form_t4->revisadot4 = 1;
        $form_t4->anulart4 = 0;

     
        $form_t4->cedula = $request->cedula;
        $form_t4->nomRes = $request->nomRes;  
        $form_t4->apeRes = $request->apeRes;  
        $form_t4->telfRes = $request->telfRes;  
        $form_t4->cargoRes = $request->cargoRes;  


        if($form_t4->correRes = $request->correRes == ''){
          $form_t4->correRes = '0';  
        }else{
          $form_t4->correRes = $request->correRes; 
        }



        if($form_t4->save()){
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form_t4 = modeloT4::find($id);
        $migSelectT4 = mod_selectT4::all();
        $migSelectT41 = mod_selectT41::all();

        return view('layouts.modificarT-4', compact('form_t4','migSelectT4','migSelectT41'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_t4 = modeloT4::find($id);
        $form_t4->codResp = $request->codResp;
        $form_t4->tipoResp = $request->tipoResp;
        $form_t4->depAdmRes = $request->depAdmRes;
        $form_t4->cedula = $request->cedula;
        $form_t4->nomRes = $request->nomRes;  
        $form_t4->apeRes = $request->apeRes;  
        $form_t4->telfRes = $request->telfRes;  
        $form_t4->cargoRes = $request->cargoRes;  


        if($form_t4->correRes = $request->correRes == ''){
          $form_t4->correRes = '0';  
        }else{
          $form_t4->correRes = $request->correRes; 
        }

        if($form_t4->save()){
            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
