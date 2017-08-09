<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT21;
use App\mod_selectT21;

class controladorT21 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //id->name/ placeholder / maxlength
        $infoSelect=mod_selectT21::all();

        $arrayT21=array(
            array("codOt2_1","CÓDIGO DE ORIGEN","Introduzca el N° el código de origen","12","col-md-pull-4"),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            array("codPro","CÓDIGO DE PROVEEDOR:","Introduzca código del proveedor","10","col-md-push-0"),
            array("numCom","N° ORDEN DE LA ORDEN DE COMPRA:","Introduzca ORDEN COMPRA","10",""),
            array("numNota","N° DE LA NOTA DE ENTREGA:","Introduzca el N° de la nota de entrega","10",""),
            array("numFac","N° DE LA NOTA FACTURA:","Introduzca el N° de la factura","10",""),
            );

  
        $selectT21=array(
            array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            );

        $dateT21=array(
            array("feCom","FECHA DE LA ORDEN DE COMPRA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status",""),
            );

        $dateT211=array(
            array("feNota","FECHA DE LA NOTA DE ENTREGA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status","col-md-push-0"),
            );
        $dateT212=array(
            array("feFac","FECHA DE LA FACTURA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status","col-md-push-0"),
            );
        return view('tablasForm.t2-1dobmioe', compact('arrayT21','selectT21','infoSelect','dateT21','dateT211','dateT212'));
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
        $form_t21=new modeloT21();
        $form_t21->codAdq = $request->codAdq;
        $form_t21->revisadot21 = 1;
        $form_t21->anulart21 = 0;

        if($form_t21->codOt2_1 = $request->codOt2_1 == ''){
         $form_t21->codOt2_1 = '0'; 

           }else{
            $form_t21->codOt2_1 = $request->codOt2_1;
           }  

        if($form_t21->codPro = $request->codPro == ''){
         $form_t21->codOt2_1 = '0';
        
           }else{
            $form_t21->numCom = $request->numCom;
           }

        if($form_t21->numNota = $request->numNota == ''){
            $form_t21->numNota = '0';

            }else{
            $form_t21->numNota = $request->numNota;    
            }

        if($form_t21->numFac = $request->numFac == ''){
            $form_t21->numFac = '0';

            }else{
            $form_t21->numFac = $request->numFac;    
            }

        if($form_t21->feCom = $request->feCom == '1111-11-11'){
            $form_t21->feCom = '111111111';

            }else{
            $form_t21->feCom = $request->feCom;    
            }

        if($form_t21->feNota = $request->feNota == '1111-11-11'){
            $form_t21->feNota = '111111111';

            }else{
            $form_t21->feNota = $request->feNota;    
            }

        if($form_t21->feFac = $request->feFac == '1111-11-11'){
            $form_t21->feFac = '111111111';

            }else{
            $form_t21->feFac = $request->feFac;    
            }

        if($form_t21->save()){
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
