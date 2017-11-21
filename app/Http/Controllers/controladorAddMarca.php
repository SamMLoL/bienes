<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sel_marca;
use App\sel_marca1;
use App\sel_marca2;
use App\modeloMarcas;
use App\modeloBitacora;


class controladorAddMarca extends Controller
{
    public function index(){

    	$array= array(
            array("denCoMar","Denominación de la Marca:","Introduzca el nombre de la marca ","100"),
    		array("codMarca","Código de la Marca:","Introduzca el código de la marca ","10"),
    		array("nomFabri","Nombre del Fabricante:","Introduzca el nombre del fabricante","100"),
    		);

    	return view('añadir.añadirMarcas', compact('array'));
    }


     public function store(Request $request)
    {

      $duplicado = sel_marca1::where('opcion', $request->codMarca)->get();
      $duplicado2 = sel_marca::where('opcion', $request->denCoMar)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){
        
        $form_tMarca=new sel_marca();
        $form_tMarca->opcion = $request->denCoMar;
        $form_tMarca->save();

        $marc = sel_marca::all();
        $idMarc = $marc->last();

        $denCoMar = new sel_marca1();
        $denCoMar->opcion = $request->codMarca;
        $denCoMar->relacion = $idMarc->id;
        $denCoMar->save();

        $coMar = sel_marca1::all();
        $idcoMar = $coMar->last();
      

        $nomFabri = new sel_marca2;
        $nomFabri->opcion =  $request->nomFabri;
        $nomFabri->relacion = $idcoMar->id;
        $nomFabri->save();

        
      return back()->with('msj', 'Datos Registrados Exitosamente');
      
    }else{
      return back()->with('errormsj', 'La Marca "'.$request->denCoMar.'" ya existe, por favor intente otra marca.');
   
      } 

    }else{
      return back()->with('errormsj', 'El Código "#'.$request->codMarca.'" ya existe, por favor siga el orden establecido e introduzca un Código nuevo');
      }  

    }

}
