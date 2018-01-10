<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloMarcas;
use App\modeloBitacora;


class controladorAddMarca extends Controller
{
    public function index(){

      $lastCod = modeloMarcas::select('codMarca')->get()->last();
      $infoSelectt = modeloMarcas::all();

    	$array= array(
        array("denComar","Denominación de la Marca:","Introduzca el nombre de la marca ","100"),
    		array("codMarca","Código de la Marca:","Introduzca el código de la marca ","10"),
    		array("nomFabri","Nombre del Fabricante:","Introduzca el nombre del fabricante","100"),
    		);

    	return view('añadir.añadirMarcas', compact('array','lastCod','infoSelectt'));
    }


     public function store(Request $request)
    {

      $duplicado = modeloMarcas::where('codMarca', $request->codMarca)->get();
      $duplicado2 = modeloMarcas::where('denComar', $request->denComar)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){
        
        $form_t5 = new modeloMarcas();
        $form_t5->codMarca = $request->codMarca;
        $form_t5->denComar = $request->denComar;
        $form_t5->nomFabri = $request->nomFabri;
        $form_t5->revisadot5 = 1;

    if($form_t5->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 1;
        $bit->referencia = 'Marcas';
        $bit->save();

    }
        
      return back()->with('msj', 'Datos Registrados Exitosamente');
      
    }else{
      return back()->with('errormsj', 'La Marca "'.$request->denComar.'" ya existe, por favor intente otra marca.');
   
      } 

    }else{
      return back()->with('errormsj', 'El Código "#'.$request->codMarca.'" ya existe, por favor siga el orden establecido e introduzca un código nuevo');
      }  

    }

    public function edit($id)
    {
        $form_t5 = modeloMarcas::find($id);

        return view('layouts.modificarMarcas', compact('form_t5'));
    }
    
    public function update(Request $request, $id)
    {
        $form_t5 = modeloMarcas::find($id);
        $form_t5->codMarca = $request->codMarca;
        $form_t5->nomFabri = $request->nomFabri;

        if($form_t5->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 2;
        $bit->referencia = 'Marcas';
        $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
