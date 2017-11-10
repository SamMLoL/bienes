<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloResponsables;
use App\modeloBitacora;


class con_responsablesVer extends Controller
{
    public function index(){
        
        $verT4= modeloResponsables::where('anulart4', '0')->get();

        return view('registros.regResponsables', compact('verT4'));

    }

    public function selectId($id){

        $seleccion = modeloResponsables::find($id);
        $seleccion->revisadot4 = 0;
        $seleccion->save();

       return view('muestraReg.muestraResponsables',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularRespon($id)
    {
        $seleccion= modeloResponsables::find($id);
        $seleccion->anulart4 = 1;
        
       if($seleccion->save()){
       	$bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Responsable de los Bienes';
        $bit->save();

         return redirect('regResponsables')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
