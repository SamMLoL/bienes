<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloPermuta;
use App\modeloBitacora;

class con_permutaVer extends Controller
{
     public function index(){
        
        $verT26= modeloPermuta::where('anulart26', '0')->get();

        return view('registros.regPermuta', compact('verT26'));

    }

    public function selectId($id){

        $seleccion = modeloPermuta::find($id);
        $seleccion->revisadot26 = 0;
        $seleccion->save();

       return view('muestraReg.muestraPermuta',compact('seleccion'));
    }

     /*FUNCIÓN anularT26 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularPermu($id)
    {
        $seleccion= modeloPermuta::find($id);
        $seleccion->anulart26 = 1;
        
       if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Permuta';
          $bit->save();

         return redirect('regPermuta')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
