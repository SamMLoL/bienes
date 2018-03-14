<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloInmuebles;

class con_inmueblesVer extends Controller
{
     public function index(){
      	
      	$verT12= modeloInmuebles::all();

      	return view('RegistrosT.regInmuebles', compact('verT12'));

    }

    public function selectId($id){

      	$seleccion = modeloInmuebles::find($id);
        $seleccion->revisadot12 = 0;
        $seleccion->save();

       return view('MuestraAnexosT.muestraInmuebles',compact('seleccion'));
    }

     /*FUNCIÓN anularBienes es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularInmuebles($id)
    {
      $seleccion= modeloInmuebles::find($id);
        
        if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Bienes';
          $bit->save();

         return redirect('regInmuebles')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
