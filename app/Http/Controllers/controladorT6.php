<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT6;

class controladorT6 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrayT6 = array(
            array("codModel","CÓDIGO DEL MODELO:","Introduzca el código del modelo","10"),
            array("denModFab","DENOMINACIÓN DEL MODELO:","Indique la denominación según el fabricante","100"),
            array("codMarca","CÓDIGO DE LA MARCA:","Introduzca el código de la marca","10"),
            array("codSegModel","CÓDIGO DEL BIEN MUEBLE:","Indique el código según catalogo del modelo","10"),
            );

        return view('tablasForm.t6dmbmoe', compact('arrayT6'));
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
