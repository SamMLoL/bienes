<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT23;


class controladorVerT23 extends Controller
{
      public function index(){
      	
      	$verT23= modeloT23::where('anulart23', '0')->get();

      	return view('registros.registroT2-3', compact('verT23'));

    }

    public function selectId23($id){

      	$seleccion = modeloT23::find($id);
        $seleccion->revisadot23 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-3',compact('seleccion'));
    }

     /*FUNCIÓN anularT23 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT23($id)
    {
        $seleccion= modeloT23::find($id);
        $seleccion->anulart23 = 1;
        
       if($seleccion->save()){
         return redirect('registroT2-3')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
