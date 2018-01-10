<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloModelos;
use App\modeloBitacora;

class con_histoModelos extends Controller
{
    public function index()
    {
        
        $verT6= modeloModelos::all();

        return view('añadir.historicoModelos', compact('verT6'));
    }

    public function selectId($id)
    {

        $seleccion = modeloModelos::find($id);
        $seleccion->revisadot6 = 0;
        $seleccion->save();

       return view('añadir.fichaModelos', compact('seleccion'));
    }

    public function anularModelo($id)
    {
      
      $seleccion = modeloModelos::find($id);

      if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Modelos';
          $bit->save();

          return redirect('histoModelos')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los Datos no se Eliminaron');
       }

    }

}
