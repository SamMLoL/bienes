<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloConfiscacion;
use App\modeloBitacora;

class con_confiscacionVer extends Controller
{
    public function index(){
      	
      $verT22= modeloConfiscacion::all();

      return view('RegistrosT.regConfiscacion', compact('verT22'));

    }

    public function selectId($id){

      $seleccion = modeloConfiscacion::find($id);
      $seleccion->revisadot22 = 0;
      $seleccion->save();

       return view('MuestraAnexosT.muestraConfiscacion',compact('seleccion'));
    }

    public function anularConfis($id)
    {
      $seleccion= modeloConfiscacion::find($id);
        
        if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Confiscación';
          $bit->save();

         return redirect('regConfiscacion')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
