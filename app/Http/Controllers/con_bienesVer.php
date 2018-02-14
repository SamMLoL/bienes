<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloBienes;
use App\modeloBitacora;


class con_bienesVer extends Controller
{
     public function index(){
      	
      	$verT8= modeloBienes::all();

      	return view('RegistrosT.regBienes', compact('verT8'));

    }

    public function idBienes($id){

      	$seleccion = modeloBienes::find($id);
        $seleccion->revisadot8 = 0;
        $seleccion->save();

       return view('MuestraAnexosT.muestraBienes',compact('seleccion'));
    }

     /*FUNCIÓN anularBienes es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularBienes($id)
    {
      $seleccion= modeloBienes::find($id);
        
        if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Bienes';
          $bit->save();

         return redirect('regBienes')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
