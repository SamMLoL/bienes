<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT4;

class controladorVerT4 extends Controller
{
        public function index(){
        
        $verT4= modeloT4::where('anulart4', '0')->get();

        return view('registros.registroT-4', compact('verT4'));

    }

    public function selectId4($id){

        $seleccion = modeloT4::find($id);
        $seleccion->revisadot4 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT-4',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT4($id)
    {
        $seleccion= modeloT4::find($id);
        $seleccion->anulart4 = 1;
        
       if($seleccion->save()){
         return redirect('registroT4')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
