<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloExpropiacion;
use App\modeloBitacora;


class con_expropiacionVer extends Controller
{
    public function index(){
        
        $verT25= modeloExpropiacion::where('anulart25', '0')->get();

        return view('registros.regExpropiacion', compact('verT25'));

    }

    public function selectId($id){

        $seleccion = modeloExpropiacion::find($id);
        $seleccion->revisadot25 = 0;
        $seleccion->save();

       return view('muestraReg.muestraExpropiacion',compact('seleccion'));
    }

     /*FUNCIÓN anularT25 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularExpro($id)
    {
        $seleccion= modeloExpropiacion::find($id);
        $seleccion->anulart25 = 1;
        
       if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Expropiación';
          $bit->save();

         return redirect('regExpropiacion')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
