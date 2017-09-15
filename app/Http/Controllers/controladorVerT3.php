<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT3;

class controladorVerT3 extends Controller
{
      public function index(){
        
        $verT3= modeloT3::where('anulart3', '0')->get();

        return view('registros.registroT3', compact('verT3'));

    }

    public function selectId3($id){

        $seleccion = modeloT3::find($id);
        $seleccion->revisadot3 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT-3',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT3($id)
    {
        $seleccion= modeloT3::find($id);
        $seleccion->anulart3 = 1;
        
       if($seleccion->save()){
         return redirect('registroT3')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
