<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT5;


class controladorVerT5 extends Controller
{
      public function index(){
        
        $verT5= modeloT5::where('anulart5', '0')->get();

        return view('registros.registroT-5', compact('verT5'));

    }

    public function selectId5($id){

        $seleccion = modeloT5::find($id);
        $seleccion->revisadot5 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT-5',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT5($id)
    {
        $seleccion= modeloT5::find($id);
        $seleccion->anulart5 = 1;
        
       if($seleccion->save()){
         return redirect('registroT5')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
