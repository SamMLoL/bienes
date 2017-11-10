<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDacion;
use App\modeloBitacora;


class con_dacionVer extends Controller
{
      public function index(){
      	
      	$verT23= modeloDacion::where('anulart23', '0')->get();

      	return view('registros.regDacion', compact('verT23'));

    }

    public function selectId($id){

      	$seleccion = modeloDacion::find($id);
        $seleccion->revisadot23 = 0;
        $seleccion->save();

       return view('muestraReg.muestraDacion',compact('seleccion'));
    }

     /*FUNCIÓN anularT23 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularDacion($id)
    {
        $seleccion= modeloDacion::find($id);
        $seleccion->anulart23 = 1;
        
       if($seleccion->save()){

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
