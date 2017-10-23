<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\modeloT21;
use App\modeloBitacora;


class controladorVerT21 extends Controller
{
    public function index(){
      	
      	$verT21= modeloT21::where('anulart21', '0')->get();

      	return view('registros.registroT2-1', compact('verT21'));

    }

    public function selectId21($id){

      	$seleccion = modeloT21::find($id);
        $seleccion->revisadot21 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-1',compact('seleccion'));
    }

     /*FUNCIÓN anularT21 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT21($id)
    {
        $seleccion= modeloT21::find($id);
        $seleccion->anulart21 = 1;
        
       if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Anexo T2-1';
          $bit->save();

         return redirect('registroT2-1')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
