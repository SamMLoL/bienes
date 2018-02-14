<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDatosbienes;
use App\modeloBitacora;

class con_datosbienesVer extends Controller
{
    public function index(){
        
    $verT11= modeloDatosbienes::all();

    return view('RegistrosT.regDatosbienes', compact('verT11'));

    }

    public function selectId($id){

    $seleccion = modeloDatosbienes::find($id);
    $seleccion->revisadot11 = 0;
    $seleccion->save();

       return view('MuestraAnexosT.muestraDatosbienes',compact('seleccion'));
    }

     /*FUNCIÓN anularT10 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularDatos($id)
    {
    
    $seleccion= modeloDatosbienes::find($id);
        
    if($seleccion->delete()){
       	$bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Datos de los Bienes';
        $bit->save();
          
         return redirect('regDatosbienes')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
