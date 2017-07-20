<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT2;
use App\mod_selectT2;

class controladorT2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $traeselectT2=mod_selectT2::all();

        # for/id/name label /placeholder 
        $arrayt2=array(
            array("t2_cod_origen","CÓDIGO DE ORIGEN:","Introduzca el N° el código de origen","12","col-md-pull-4"),
            #array("cod_adquisicion_t2","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","Introduzca el código de adquisición"),
            array("nom_concurso_t2","NOMBRE DE CONCURSO:","Introduzca el nombre del concurso","255","col-md-push-0"),
            array("n_concurso_t2","NÚMERO DE CONCURSO:","Introduzca el N° del concurso","30",""),
            array("cod_proveedor_t2","CÓDIGO DE PROVEEDOR:","Introduzca código del proveedor","10",""),
            array("n_contracto_t2","NÚMERO DE CONTRATO:","Introduzca el N° de contrato","10",""),
            array("n_notaentrega_t2","NÚMERO DE LA NOTA DE ENTREGA:","Introduzca el número de la nota de entrega","30",""),
            array("n_factura_t2","NÚMERO DE LA FACTURA:","Introduzca el N° de factura","30",""),
            );

        $datet2=array(
            array("fe_concurso_t2","FECHA DE CONCURSO:","¡En caso de no conocerla, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $date2t2=array(
           
            array("fe_contracto_t2","FECHA DEL CONTRATO:","¡En caso de no conocerla, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
         
            );

        $date3t2=array(
           array("fe_nota_entrega_t2","FECHA DE LA NOTA DE  ENTREGA:","¡En caso de no conocerla, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
           array("fe_factura_t2","FECHA DE LA FACTURA:","¡En caso de no conocerla, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"), /*ESTE GENERALMENTE SE TENDRIA QUE CREAR UN ARRAY APARTE PARA MOSTRAR LA FECHA EN LA ULTIMA POSICIÓN YA QUE LA RETROCEDIO UNA ESPECIFICAMENTE PARA SER MÁS CLARO EN LA POSICIÓN DE INPUT*/
            );

        $traeseladqui=array(
           array("cod_adquisicion_t2","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            );

        return view('inventarios.t2dobmioe', compact('traeselectT2','arrayt2','datet2','date2t2','date3t2','traeseladqui'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $form_t2= new modeloT2();
        $form_t2->t2_cod_origen = $request->t2_cod_origen;
        $form_t2->cod_adquisicion_t2 = $request->cod_adquisicion_t2;
        $form_t2->nom_concurso_t2 = $request->nom_concurso_t2;
        $form_t2->n_concurso_t2 = $request->n_concurso_t2;
        $form_t2->cod_proveedor_t2 = $request->cod_proveedor_t2;
        $form_t2->n_contracto_t2 = $request->n_contracto_t2;
        $form_t2->n_notaentrega_t2 = $request->n_notaentrega_t2;
        $form_t2->fe_factura_t2 = $request->fe_factura_t2;
        $form_t2->n_factura_t2 = $request->n_factura_t2;
        

        if ($form_t2->fe_concurso_t2 = $request->fe_concurso_t2 == '') {
        $form_t2->fe_concurso_t2 = '11111111';
      
             }else{
             $form_t2->fe_concurso_t2 = $request->fe_concurso_t2;
             }

        if ($form_t2->fe_contracto_t2 = $request->fe_contracto_t2 == '') {
        $form_t2->fe_contracto_t2 = '11111111';
      
             }else{
             $form_t2->fe_contracto_t2 = $request->fe_contracto_t2;
             }

        if ($form_t2->fe_nota_entrega_t2 = $request->fe_nota_entrega_t2 == '') {
        $form_t2->fe_nota_entrega_t2 = '11111111';
      
             }else{
             $form_t2->fe_nota_entrega_t2 = $request->fe_nota_entrega_t2;
             }

        if ($form_t2->fe_factura_t2 = $request->fe_factura_t2 == '') {
        $form_t2->fe_factura_t2 = '11111111';
      
             }else{
             $form_t2->fe_factura_t2 = $request->fe_factura_t2;
             }


      if($form_t2->save()){
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
