<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT27;

class controladorVerT27 extends Controller
{
    
   public function index(){
        
        $verT27= modeloT27::where('anulart27', '0')->get();

        return view('registros.registroT2-7', compact('verT27'));

    }

    public function selectId27($id){

        $seleccion = modeloT27::find($id);
        $seleccion->revisadot27 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-7',compact('seleccion'));
    }

     /*FUNCIÓN anularT27 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT27($id)
    {
        $seleccion= modeloT27::find($id);
        $seleccion->anulart27 = 1;
        
       if($seleccion->save()){
         return redirect('registroT2-7')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
} 