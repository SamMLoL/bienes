<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloTransferencia;
use App\modeloBitacora;


class con_transferenciaVer extends Controller
{
    public function index(){
        
        $verT27= modeloTransferencia::all();

        return view('RegistrosT.regTransferencia', compact('verT27'));

    }

    public function selectId($id){

        $seleccion = modeloTransferencia::find($id);
        $seleccion->revisadot27 = 0;
        $seleccion->save();

       return view('MuestraAnexosT.muestraTransferencia',compact('seleccion'));
    }

     /*FUNCIÓN anularT27 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularTrans($id)
    {
        $seleccion= modeloTransferencia::find($id);
        $seleccion->anulart27 = 1;
        $seleccion->codOt2_7 = 'anulado';
        
       if($seleccion->save()){

       	  $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Transferencia';
          $bit->save();

         return redirect('regTransferencia')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
