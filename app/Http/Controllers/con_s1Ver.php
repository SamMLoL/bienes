<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS1;
use App\modeloBitacora;


class con_s1Ver extends Controller
{
    public function index(){
        
        $verS1= modeloS1::all();

        return view('RegistrosS.regBasicos', compact('verS1'));

    }

    public function selectId($id){

    $seleccion = modeloS1::find($id);
    $seleccion->revisadoS1 = 0;
    $seleccion->save();

       return view('MuestraAnexosS.muestraBasicos',compact('seleccion'));
    }

   
    public function anularBasicos($id)
    {

    $seleccion= modeloS1::find($id);
        
       if($seleccion->delete()){
       	$bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Datos Básicos de los Inmuebles';
        $bit->save();

         return redirect('regBasicos')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
