<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloExpropiacion;
use App\modeloBitacora;


class con_expropiacionVer extends Controller
{
    public function index(){
        
      $verT25= modeloExpropiacion::all();

      return view('registros.regExpropiacion', compact('verT25'));

    }

    public function selectId($id){

      $seleccion = modeloExpropiacion::find($id);
      $seleccion->revisadot25 = 0;
      $seleccion->save();

       return view('muestraReg.muestraExpropiacion',compact('seleccion'));
    }


    public function anularExpro($id)
    {
      $seleccion= modeloExpropiacion::find($id);
        
       if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Expropiación';
          $bit->save();

         return redirect('regExpropiacion')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
