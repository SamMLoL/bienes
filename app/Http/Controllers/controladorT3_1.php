<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT3_1;
use App\mod_selectT3_1;




class controladorT3_1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $infoSelect = mod_selectT3_1::all();
        


        $selectT3= array(
            array("poseRes","POSEE RESPONSABILIDAD CIVIL:","2"),
            );

        $selectT3_1= array(
            array("tipoCobe","TIPO COBERTURA DE LA PÓLIZA:","5"),
            );

        $arrayT3_1= array(
            array("espeCobe","ESPECIFIQUE TIPO DE COBERTURA:","100"),
            array("descCobe","DESCRIPCIÓN DE LA COBERTURA:","200"),
            );

        return view("tablasForm.t3-1dobmioe", compact('infoSelect','selectT3','selectT3_1','arrayT3_1'));

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
        $form_t3_1= new modeloT3_1();
        $form_t3_1->poseRes = $request->poseRes;
        $form_t3_1->tipoCobe = $request->tipoCobe;
        $form_t3_1->revisadot3_1 = 1;
        $form_t3_1->anulart3_1 = 0;

        if($form_t3_1->espeCobe = $request->espeCobe == ''){
         $form_t3_1->espeCobe = '1'; 

           }else{
            $form_t3_1->espeCobe = $request->espeCobe;
           }  

        if($form_t3_1->descCobe =$request->descCobe == ''){
          $form_t3_1->descCobe = '1';
          
           }else{
            $form_t3_1->descCobe = $request->descCobe;  
           }

        if($form_t3_1->save()){
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
        //
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
        //
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
