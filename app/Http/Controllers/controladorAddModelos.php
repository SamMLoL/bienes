<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloModelos;
use App\modeloMarcas;
use App\modeloBitacora;

class controladorAddModelos extends Controller
{
    public function index()
    {

        $infoSelect = modeloMarcas::all();
        $lastCod = modeloModelos::select('codModel')->get()->last();

        $arrayT6 = array(
            array("codModel","Código del Modelo:","Introduzca el código del modelo","10","col-md-pull-0"),
            array("denModFab","Denominación del Modelo Según el Fabricante:","Indique la denominación según el fabricante","100","col-md-push-0"),
            );

        $selectCod = array(
             array("codMarca","Código de la Marca:","Introduzca el código de la marca","10","col-md-push-0"),
            );

        $arrayBien = array(
            array("codSegModel","Código del Bien Mueble Según Catalogo:","Indique el código según catalogo del modelo","10",""),
            );

        return view('añadir.añadirModelos', compact('arrayT6','selectCod','infoSelect','arrayBien','lastCod'));
    }

    public function store(Request $request)
    {
        $form_t6 =  modeloModelos::where('codModel', $request->codModel)->get();
        
        
        
        if($form_t6 == '[]'){


        $form_t6 =new modeloModelos();
        $form_t6->codModel = $request->codModel;
        $form_t6->denModFab = $request->denModFab;
        $form_t6->codMarca = $request->codMarca;
        $form_t6->codSegModel = $request->codSegModel;
        $form_t6->revisadot6 = 1;
        $form_t6->save();



        if($form_t6->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Modelos';
          $bit->save();

        }

        return back()->with('msj', 'Datos Registrados Exitosamente');
            }else{
        return back()->with('errormsj', 'El Código del Modelo "#'.$request->codModel.'" ya existe, por favor siga el orden establecido e intente un modelo nuevo');
        }  
        
    }


    public function edit($id)
    {
        $form_t6 = modeloModelos::find($id);
        $infoSelect = modeloMarcas::all();
 
        return view('layouts.modificarModelos', compact('form_t6','infoSelect'));
             
    }

    public function update(Request $request, $id)
    {

        $form_t6=modeloModelos::find($id);
  
        $form_t6->denModFab = $request->denModFab;
        $form_t6->codMarca = $request->codMarca;
        $form_t6->codSegModel = $request->codSegModel;
        
        if($form_t6->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Modelos';
          $bit->save();

          return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

        
    }
    
}
