<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDonacion;
use App\modeloBitacora;

class con_donacionVer extends Controller
{
     public function index(){
      	
      	$verT24= modeloDonacion::all();

      	return view('RegistrosT.regDonacion', compact('verT24'));

    }

    public function selectId($id){

      	$seleccion = modeloDonacion::find($id);
        $seleccion->revisadot24 = 0;
        $seleccion->save();

       return view('MuestraAnexosT.muestraDonacion',compact('seleccion'));
    }

    public function anularDonac($id)
    {
        $seleccion= modeloDonacion::find($id);
        
       if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Donacion';
          $bit->save();

         return redirect('regDonacion')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
