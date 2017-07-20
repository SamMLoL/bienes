<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorT3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   # id / label / placeholder tabla->t3dsbmioe type="text">
  $prueba=array(
  	array("cod_registro_t3","CÓDIGO DE REGISTRO:","Introduzca el codigo de registro","10"),
  	array("comp_aseguradora_t3","COMPAÑIA ASEGURADORA:","select","30"),
  	array("otra_comp_ase_t3","OTRA COMPAÑIA DE ASEGURADORA:","Introduzca otra compañia aseguradora","30"),
  	array("n_poliza_t3","NÚMERO DE POLIZA:","Introduzca el N° de poliza","10"),
  	array("tip_poliza_t3","TIPO DE POLIZA:","Introduzca el tipo de poliza","30"),
  	array("monto_asegurado_t3","MONTO ASEGURADO:","Introduzca el monto asegurado","50"),
  	array("moneda_t3","MONEDA:","select","50"),
  	array("espe_moneda_t3","ESPECIFIQUE LA MONEDA:","select","50"),
  	array("respon_civil_t3","POSEE RESPONSABILIDAD CIVIL:","Indique si posee responsabilidad civil","50"),
  	array("tip_cobertura_t3","TIPO DE COBERTURA DE LA POLIZA:","Introduzca el tipo de cobertura","30"),
  	array("espec_tip_cober_t3","ESPECIFIQUE EL TIPO DE COBERTURA::","Descripción de la cobertura","30"),
  	

  	);
  
   # id / label tabla->t3dsbmioe type="date">
  $datet3=array(
    array("fe_ini_poliza_t3","FECHA DE INICIO DE LA POLIZA","! En caso de no conocer la fecha, deje el campo en blanco ¡"),
    array("fe_fin_poliza_t3","FECHA FIN DE LA POLIZA","! En caso de no conocer la fecha, deje el campo en blanco ¡"),
  	);

  return view('tablas.t3dsbmioe', compact('prueba','datet3'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
    
 



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
