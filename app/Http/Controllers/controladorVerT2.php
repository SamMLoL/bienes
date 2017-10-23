<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\modeloT2;
use App\modeloBitacora;

class controladorVerT2 extends Controller
{
    public function index(){
     
     $verT2 = modeloT2::where('anulart2','0')->get();
     return view('registros.registroT2', compact('verT2'));
    }

     public function selectId($id){

       $seleccion = modeloT2::find($id);
       $seleccion->revisadot2 = 0;
       $seleccion->save();
       return view('muestraReg.muestraT2',compact('seleccion'));
    }

     /*FUNCIÓN anularT2 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

     public function anularT2($id)
    {
        $seleccion= modeloT2::find($id);
        $seleccion->anulart2 = 1;
        
        if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Anexo T-2';
          $bit->save();

         return redirect('registroT2')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
        }
    }
     
}



