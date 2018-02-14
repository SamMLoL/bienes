<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloPermuta;
use App\modeloBitacora;

class con_permutaVer extends Controller
{
     public function index(){
        
        $verT26= modeloPermuta::all();

        return view('RegistrosT.regPermuta', compact('verT26'));

    }

    public function selectId($id){

        $seleccion = modeloPermuta::find($id);
        $seleccion->revisadot26 = 0;
        $seleccion->save();

       return view('MuestraAnexosT.muestraPermuta',compact('seleccion'));
    }


    public function anularPermu($id)
    {
        $seleccion= modeloPermuta::find($id);

       if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Permuta';
          $bit->save();

         return redirect('regPermuta')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
