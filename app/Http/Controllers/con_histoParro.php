<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sel_parroquias;
use App\modeloBitacora;

class con_histoParro extends Controller
{
     public function index()
    {
        
        $verParro= sel_parroquias::all();

        return view('añadir.histoParroquia', compact('verParro'));
    }

    public function selectId($id)
    {

        $seleccion = sel_parroquias::find($id);
        $seleccion->revisadoAddParro = 0;
        $seleccion->save();

       return view('añadir.fichaParroquia', compact('seleccion'));
    }

    public function anularParroquia($id)
    {
      
      $seleccion = sel_parroquias::find($id);

      if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Eliminó Parroquia';
          $bit->save();

          return redirect('histoParroquia')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los Datos no se Eliminaron');
       }

    }
}
