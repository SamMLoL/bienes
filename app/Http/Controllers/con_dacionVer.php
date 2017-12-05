<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDacion;
use App\modeloBitacora;


class con_dacionVer extends Controller
{
      public function index(){
      	
      	$verT23= modeloDacion::all();

      	return view('registros.regDacion', compact('verT23'));

    }

    public function selectId($id){

      	$seleccion = modeloDacion::find($id);
        $seleccion->revisadot23 = 0;
        $seleccion->save();

       return view('muestraReg.muestraDacion',compact('seleccion'));
    }

    public function anularDacion($id)
    {
        $seleccion= modeloDacion::find($id);
        
        
       if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Dación en Pago';
          $bit->save();

         return redirect('regDacion')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
