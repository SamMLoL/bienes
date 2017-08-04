<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $arrayt4=array(
            array("cod_responsable_t4","CÓDIGO DEL RESPONSABLE:","Introduzca el código del responsable"),         
            array("tip_responsable_t4","TIPO DE RESPONSABLE:","Indique el tipo de responsable"),         
            array("cedula_t4","CEDULA DE IDENTIDAD:","Introduzca el N° de cédula de identidad"),         
            array("nom_responsable_t4","NOMBRE DE RESPONSABLE:","Introduzca el nombre del responsable"),         
            array("ape_responsable_t4","APELLIDO DE RESPONSABLE:","Introduzca el apellido del responsable"),         
            array("tlf_responsable_t4","TELEFONO DE RESPONSABLE:","Introduzca el apellido del responsable","Introduzca el teléfono del responsable"),         
                 
            );


        return view('inventarios.t4drbmioe', compact('arrayt4'));
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
        //
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
