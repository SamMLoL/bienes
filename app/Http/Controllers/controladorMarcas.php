<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mod_selectT5;
use App\mod_selectT51;
use App\mod_selectT52;
use App\modeloMarcas;


class controladorMarcas extends Controller
{
    public function index(){

    	$array= array(
            array("denCoMar","DENOMINACIÓN DE LA MARCA:","Introduzca el nombre de la marca ","200"),
    		array("codMarca","CÓDIGO DE LA MARCA:","Introduzca el código de la marca ","200"),
    		array("nomFabri","NOMBRE DEL FABRICANTE:","Introduzca el nombre del fabricante","200"),
    		);

    	return view('añadir.añadirMarcas', compact('array'));
    }


     public function store(Request $request)
    {


      $duplicado = mod_selectT51::where('opcion', $request->codMarca)->get();
      $duplicado2 = mod_selectT5::where('opcion', $request->denCoMar)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){

        $form_tMarca=new modeloMarcas();
        $form_tMarca->regisPor = $request->regisPor;  
        $form_tMarca=new mod_selectT5();
        $form_tMarca->opcion = $request->denCoMar;
        $form_tMarca->save();

        $marc = mod_selectT5::all();
        $idMarc = $marc->last();

        $denCoMar = new mod_selectT51();
        $denCoMar->opcion = $request->codMarca;
        $denCoMar->marca_id = $idMarc->id;
        $denCoMar->save();

        $coMar = mod_selectT51::all();
        $idcoMar = $coMar->last();
      

        $nomFabri = new mod_selectT52;
        $nomFabri->opcion =  $request->nomFabri;
        $nomFabri->codMarca_id = $idcoMar->id;


        $nomFabri->save();
        
        return back()->with('msj', 'Datos Registrados Exitosamente');
      
    }else{
      return back()->with('errormsj', 'La Marca "'.$request->denCoMar.'" ya existe, por favor intente otra marca.');
   
      } 

    }else{
      return back()->with('errormsj', 'El Código "#'.$request->codMarca.'" ya existe, por favor siga el orden establecido e intente de nuevo');
      }  

    }
}
