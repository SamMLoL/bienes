<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\modeloT1;
use App\modeloBitacora;


class controladorVerT1 extends Controller
{

    public function index()
    {
        $verT1 = modeloT1::where('anulart1', '0')->get();
        return view('registros.registroT1',compact('verT1'));
    }

  
     /*FUNCIÓN selectId es para REGISTROS SIN REVISAR CUANDO CAMBIA A 0 YA EL REGISTRO SE ABRIO*/

    public function selectId($id) {

       $seleccion = modeloT1::find($id);
       $seleccion->revisadot1 = 0;
       $seleccion->save();


       return view('muestraReg.muestraT1',compact('seleccion'));



    }
     /*FUNCIÓN anularT1 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

     public function anularT1($id)
    {
        $seleccion= modeloT1::find($id);
        $seleccion->anulart1 = 1;


        if($seleccion->save()){
          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Anexo T-1';
          $bit->save();

            return redirect('registroT1')->with('msj', 'Registro Eliminado Exitosamente');
        } else {
            return redirect()->with('errormsj', 'Los datos no se guardaron');
        }
    }

}
