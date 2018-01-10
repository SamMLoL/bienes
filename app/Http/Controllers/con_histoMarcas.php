<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloMarcas;
use App\modeloModelos;
use App\modeloBitacora;



class con_histoMarcas extends Controller
{
    public function index()
    {
    	$a= modeloMarcas::all();
    	
        return view('añadir.historicoMarcas', compact('a'));
    }

     public function selectId($id){

      	$seleccion = modeloMarcas::find($id);
        $seleccion->revisadot5 = 0;
        $seleccion->save();

       return view('añadir.fichaMarca',compact('seleccion'));
    }

    public function anularMarca($id)
    {
      $seleccion = modeloMarcas::find($id);

      $seleccion2 = modeloModelos::where('codMarca', $id)->get();

      foreach($seleccion2 as $modelos)
      {
        $modelos->delete();
      }

      if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Marcas y Modelos Asociados';
          $bit->save();

          return redirect('histoMarcas')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los Datos no se Eliminaron');
       }

    } 

}
