<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDirecta;
use App\modeloBitacora;

class con_directaVer extends Controller
{
    public function index(){
      	
      	$verT21= modeloDirecta::all();

      	return view('RegistrosT.regDirecta', compact('verT21'));

    }

    public function idDirecta($id){

      	$seleccion = modeloDirecta::find($id);
        $seleccion->revisadot21 = 0;
        $seleccion->save();

       return view('MuestraAnexosT.muestraDirecta',compact('seleccion'));
    }

     /*FUNCIÓN anularDirec es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularDirec($id)
    {
        $seleccion= modeloDirecta::find($id);
        
        
       if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Compra Directa';
          $bit->save();

         return redirect('regDirecta')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
