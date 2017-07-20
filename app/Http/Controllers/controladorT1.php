<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\modeloT1;
use App\mod_selectT1;

class controladorT1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    # id / label / placeholder TABLA->T1
    public function index()
    {
      $migselectT1 = mod_selectT1::all();

        $arrayt1=array(
            array("cod_proveedor_t1","CÓDIGO DEL PROVEEDOR:","Introduzca el código de proveedor","10"),
            array("desc_prove_t1","DESCRIPCIÓN DEL PROVEEDOR:","Descripción del proveedor","100"),
            array("t1_rif","RIF:","Introduzca el RIF J-","20"),
            array("otr_descr_t1","OTRA DESCRIPCION:","¡Deje el campo en blanco si lo desconoce!","200"),
           
            );

       
        $selectt1=array(
               array("tip_prove_t1","TIPO DE PROVEEDOR:","select","1"),
            );

        return view('inventarios.t1dpbpoe', compact('arrayt1','migselectT1','selectt1'));

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
        $form_t1= new modeloT1();
        $form_t1->cod_proveedor_t1 = $request->cod_proveedor_t1;
        $form_t1->desc_prove_t1 = $request->desc_prove_t1;
        $form_t1->tip_prove_t1 = $request->tip_prove_t1;
        $form_t1->t1_rif = $request->t1_rif;
        $form_t1->revisado = 1;

        if ($form_t1->otr_descr_t1 = $request->otr_descr_t1 == '') {
        $form_t1->otr_descr_t1 = '0';
      
             }else{
             $form_t1->otr_descr_t1 = $request->otr_descr_t1;
             }


      if($form_t1->save()){
            return back()->with('msj', 'Datos registrados exitosamente');
        } else {
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
        $form_t1 = modeloT1::find($id);
        $migselectT1 = mod_selectT1::all();
        
        return view('layouts.modificarT1', compact('form_t1', $form_t1 ,'migselectT1'));
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
        $form_t1 = modeloT1::find($id);
        $form_t1->cod_proveedor_t1 = $request->cod_proveedor_t1;
        $form_t1->desc_prove_t1 = $request->desc_prove_t1;
        $form_t1->tip_prove_t1 = $request->tip_prove_t1;
        $form_t1->t1_rif = $request->t1_rif;
        $form_t1->otr_descr_t1 = $request->otr_descr_t1;
        $form_t1->save();
    
        if($form_t1->save()){
            return back()->with('msj', 'Datos modificados exitosamente');
        } else {
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
        $form_t1 = modeloT1::find($id);
        $form_t1->delete();
        return redirect()->action('controladorVerT1@index')->with('msj', 'Registro eliminado exitosamente');
    }
}
