<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS2;
use App\modeloBitacora;

class con_s2Ver extends Controller

{
    public function index(){
        
        $verS2= modeloS2::all();

        return view('RegistrosS.regMaxima', compact('verS2'));

    }

    public function selectId($id){

    $seleccion = modeloS2::find($id);
    $seleccion->revisadoS2 = 0;
    $seleccion->save();

       return view('MuestraAnexosS.muestraMaxima',compact('seleccion'));
    }

   
    public function anularMaxima($id)
    {

    $seleccion= modeloS2::find($id);
        
       if($seleccion->delete()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Datos de la Máxima Autoridad';
        $bit->save();

         return redirect('regMaxima')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
