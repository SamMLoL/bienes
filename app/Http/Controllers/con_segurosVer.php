<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloSeguros;
use App\modeloBitacora;

class con_segurosVer extends Controller
{
    public function index(){
        
        $verT3= modeloSeguros::where('anulart3', '0')->get();

        return view('registros.regSeguros', compact('verT3'));

    }

    public function selectId($id){

        $seleccion = modeloSeguros::find($id);
        $seleccion->revisadot3 = 0;
        $seleccion->save();

       return view('muestraReg.muestraSeguros',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularSegu($id)
    {
        $seleccion= modeloSeguros::find($id);
        $seleccion->anulart3 = 1;
        
       if($seleccion->save()){
       	$bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Seguros';
        $bit->save();
          
         return redirect('regSeguros')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
