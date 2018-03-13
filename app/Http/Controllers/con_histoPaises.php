<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sel_paises;
use App\modeloBitacora;

class con_histoPaises extends Controller
{
     public function index()
    {
        
        $verPais= sel_paises::all();

        return view('añadir.histoPaises', compact('verPais'));
    }

    public function selectId($id)
    {

        $seleccion = sel_paises::find($id);
        $seleccion->revisadoAddPais = 0;
        $seleccion->save();

       return view('añadir.fichaPaises', compact('seleccion'));
    }

    public function anularPaises($id)
    {
      
      $seleccion = sel_paises::find($id);

      if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Eliminó Países';
          $bit->save();

          return redirect('histoPaises')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los Datos no se Eliminaron');
       }

    }

}
