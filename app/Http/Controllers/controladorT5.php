<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT5;
use App\mod_selectT5;
use App\mod_selectT51;
use App\mod_selectT52;

class controladorT5 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $modeloT5= modeloT5::all();
        $infoSelect5= mod_selectT5::all();
        $infoSelect51= mod_selectT51::all();
        $infoSelect52= mod_selectT52::all();


          return view('tablasForm.t5dmbmoe', compact('modeloT5','infoSelect5','infoSelect51','infoSelect52'));
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getMarcas(Request $request, $id){
    
      if($request->ajax()){
         $denCoMarcas = mod_selectT51::denCoMarcas($id);
          return response()->json($denCoMarcas);
      }
    }

    public function getFabri(Request $request, $id){
    
      if($request->ajax()){
         $nomFabricante = mod_selectT52::nomFabricante($id);
          return response()->json($nomFabricante);
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_t5 = new modeloT5();
        $form_t5->codMarca = $request->codMarca;
        $form_t5->denCoMar = $request->denCoMar;
        $form_t5->nomFabri = $request->nomFabri;
        $form_t5->revisadot5 = 1;
        $form_t5->anulart5 = 0;

         if($form_t5->save()){
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
        $form_t5 = modeloT5::find($id);
       

        return view('layouts.modificarT-5', compact('form_t5'));
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
        $form_t5 = modeloT5::find($id);
        $form_t5->codMarca = $request->codMarca;
        $form_t5->denCoMar = $request->denCoMar;
        $form_t5->nomFabri = $request->nomFabri;
 

         if($form_t5->save()){
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
