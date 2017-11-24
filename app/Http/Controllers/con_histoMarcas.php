<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloMarcas;
use App\modeloModelos;



class con_histoMarcas extends Controller
{
    public function index()
    {
    	$a= modeloMarcas::all();
    	

        return view('añadir.historicoMarcas', compact('a'));
    }

     public function selectId($id){

      	$seleccion = modeloMarcas::find($id);
   

       return view('añadir.fichaMarca',compact('seleccion'));
    }

    public function destroy($id)
    {
      

      $marca = modeloMarcas::find($id);
      $modelo = modeloModelos::where('codMarca', $id)->get();
      
      modeloMarcas::destroy($id);

      if($modelo != '[]'){
      modeloModelos::destroy($modelo[0]->id);
      } 
      
    
      return redirect('histoMarcas')->with('msj', 'Registro Eliminado Exitosamente');
    }

}
