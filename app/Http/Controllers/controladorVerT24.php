<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT24;
use App\modeloBitacora;

class controladorVerT24 extends Controller
{
       public function index(){
      	
      	$verT24= modeloT24::where('anulart24', '0')->get();

      	return view('registros.registroT2-4', compact('verT24'));

    }

    public function selectId24($id){

      	$seleccion = modeloT24::find($id);
        $seleccion->revisadot24 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-4',compact('seleccion'));
    }

     /*FUNCIÓN anularT24 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT24($id)
    {
        $seleccion= modeloT24::find($id);
        $seleccion->anulart24 = 1;
        
       if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Anexo T2-4';
          $bit->save();

         return redirect('registroT2-4')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
