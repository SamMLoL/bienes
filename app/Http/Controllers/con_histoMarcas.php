<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sel_marca;
use App\sel_marca1;
use App\sel_marca2;
use App\modeloModelos;



class con_histoMarcas extends Controller
{
    public function index()
    {
    	$a= sel_marca::all();
    	

        return view('añadir.historicoMarcas', compact('a'));
    }

     public function selectId($id){

      	$seleccion = sel_marca::find($id);
   

       return view('añadir.fichaMarca',compact('seleccion'));
    }

    public function destroy($id)
    {
      $sel_marca1 = sel_marca1::where('relacion', $id)->get();
      $sel_marca2 = sel_marca2::where('relacion', $sel_marca1[0]->id)->get();
      $modelos = modeloModelos::where('codMarca', $sel_marca1[0]->id)->get();


	    sel_marca2::destroy($sel_marca2[0]->id);
	    sel_marca1::destroy($sel_marca1[0]->id); 
      sel_marca::destroy($id);
	    
      modeloModelos::destroy($modelos[0]->id);
    
      return redirect('histoMarcas')->with('msj', 'Registro Eliminado Exitosamente');


    }

}
