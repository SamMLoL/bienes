<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloConfiscacion;
use App\modeloBitacora;

class con_confiscacionVer extends Controller
{
    public function index(){
      	
      	$verT22= modeloConfiscacion::where('anulart22', '0')->get();

      	return view('registros.regConfiscacion', compact('verT22'));

    }

    public function selectId($id){

      	$seleccion = modeloConfiscacion::find($id);
        $seleccion->revisadot22 = 0;
        $seleccion->save();

       return view('muestraReg.muestraConfiscacion',compact('seleccion'));
    }

     /*FUNCIÓN anularT21 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularConfis($id)
    {
        $seleccion= modeloConfiscacion::find($id);
        $seleccion->anulart22 = 1;
        
       if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Confiscación';
          $bit->save();

         return redirect('regConfiscacion')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
