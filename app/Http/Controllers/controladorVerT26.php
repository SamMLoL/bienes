<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT26;
use App\mod_selectT26;
use App\modeloBitacora;

class controladorVerT26 extends Controller
{
    
   public function index(){
        
        $verT26= modeloT26::where('anulart26', '0')->get();

        return view('registros.registroT2-6', compact('verT26'));

    }

    public function selectId26($id){

        $seleccion = modeloT26::find($id);
        $seleccion->revisadot26 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-6',compact('seleccion'));
    }

     /*FUNCIÓN anularT26 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT26($id)
    {
        $seleccion= modeloT26::find($id);
        $seleccion->anulart26 = 1;
        
       if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Anexo T2-6';
          $bit->save();

         return redirect('registroT2-6')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}    
   
