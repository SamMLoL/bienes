<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVerT6 extends Controller
{
   public function index(){
        
        $verT6= modeloT6::where('anulart6', '0')->get();

        return view('registros.registroT-6', compact('verT6'));

    }

    public function selectId6($id){

        $seleccion = modeloT6::find($id);
        $seleccion->revisadot6 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT-6',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT6($id)
    {
        $seleccion= modeloT6::find($id);
        $seleccion->anulart6 = 1;
        
       if($seleccion->save()){
         return redirect('registroT6')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
