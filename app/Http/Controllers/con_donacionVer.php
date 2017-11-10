<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDonacion;
use App\modeloBitacora;

class con_donacionVer extends Controller
{
     public function index(){
      	
      	$verT24= modeloDonacion::where('anulart24', '0')->get();

      	return view('registros.regDonacion', compact('verT24'));

    }

    public function selectId($id){

      	$seleccion = modeloDonacion::find($id);
        $seleccion->revisadot24 = 0;
        $seleccion->save();

       return view('muestraReg.muestraDonacion',compact('seleccion'));
    }

     /*FUNCIÓN anularT24 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularDonac($id)
    {
        $seleccion= modeloDonacion::find($id);
        $seleccion->anulart24 = 1;
        
       if($seleccion->save()){

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
