<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT25;

class controladorVerT25 extends Controller
{
          public function index(){
        
        $verT25= modeloT25::where('anulart25', '0')->get();

        return view('registros.registroT2-5', compact('verT25'));

    }

    public function selectId25($id){

        $seleccion = modeloT25::find($id);
        $seleccion->revisadot25 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-5',compact('seleccion'));
    }

     /*FUNCIÓN anularT25 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT25($id)
    {
        $seleccion= modeloT25::find($id);
        $seleccion->anulart25 = 1;
        
       if($seleccion->save()){
         return redirect('registroT2-5')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
