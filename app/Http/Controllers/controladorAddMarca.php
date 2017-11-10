<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sel_marca;
use App\sel_marca1;
use App\sel_marca2;
use App\modeloMarcas;

class controladorAddMarca extends Controller
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

      $duplicado = sel_marca1::where('opcion', $request->codMarca)->get();
      $duplicado2 = sel_marca::where('opcion', $request->denCoMar)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){
        
        $form_tMarca=new modeloMarcas();
        $form_tMarca=new sel_marca();
        $form_tMarca->opcion = $request->denCoMar;
        $form_tMarca->save();

        $marc = sel_marca::all();
        $idMarc = $marc->last();

        $denCoMar = new sel_marca1();
        $denCoMar->opcion = $request->codMarca;
        $denCoMar->marca_id = $idMarc->id;
        $denCoMar->save();

        $coMar = sel_marca1::all();
        $idcoMar = $coMar->last();
      

        $nomFabri = new sel_marca2;
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

    public function show()
    {
      //
    }

    public function destroy(Request $request)
    {
      echo "hola" ;
    }

    
}