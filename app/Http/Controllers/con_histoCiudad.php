<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sel_ciudad;
use App\modeloBitacora;

class con_histoCiudad extends Controller
{
     public function index()
    {
        
        $verCiudad= sel_ciudad::all();

        return view('añadir.histoCiudad', compact('verCiudad'));
    }

    public function selectId($id)
    {

        $seleccion = sel_ciudad::find($id);
        $seleccion->revisadoAddCiudad = 0;
        $seleccion->save();

       return view('añadir.fichaCiudad', compact('seleccion'));
    }

    public function anularCiudad($id)
    {
      
      $seleccion = sel_ciudad::find($id);

      if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Ciudad';
          $bit->save();

          return redirect('histoCiudad')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los Datos no se Eliminaron');
       }

    }
}
