<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloMarcas;
use App\modeloBitacora;


class controladorAddMarca extends Controller
{
    public function index(){

    	$array= array(
            array("denComar","Denominación de la Marca:","Introduzca el nombre de la marca ","100"),
    		array("codMarca","Código de la Marca:","Introduzca el código de la marca ","10"),
    		array("nomFabri","Nombre del Fabricante:","Introduzca el nombre del fabricante","100"),
    		);

    	return view('añadir.añadirMarcas', compact('array'));
    }


     public function store(Request $request)
    {

      $duplicado = modeloMarcas::where('codMarca', $request->codMarca)->get();
      $duplicado2 = modeloMarcas::where('denComar', $request->denComar)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){
        
        $form_t6 = new modeloMarcas();
        $form_t6->codMarca = $request->codMarca;
        $form_t6->denComar = $request->denComar;
        $form_t6->nomFabri = $request->nomFabri;

    if($form_t6->save()){
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

}
