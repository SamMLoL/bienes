<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT28;

class controladorVerT28 extends Controller
{
      public function index(){
        
        $verT28= modeloT28::where('anulart28', '0')->get();

        return view('registros.registroT2-8', compact('verT28'));

    }

    public function selectId28($id){

        $seleccion = modeloT28::find($id);
        $seleccion->revisadot28 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-8',compact('seleccion'));
    }

     /*FUNCIÓN anularT28 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT28($id)
    {
        $seleccion= modeloT28::find($id);
        $seleccion->anulart28 = 1;
        
       if($seleccion->save()){
         return redirect('registroT2-8')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
