<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS4;
use App\modeloBitacora;


class con_s4Ver extends Controller
{
     public function index(){
        
        $verS4= modeloS4::all();

        return view('RegistrosS.regSedes', compact('verS4'));

    }

    public function selectId($id){

    $seleccion = modeloS4::find($id);
    $seleccion->revisadoS4 = 0;
    $seleccion->save();

       return view('MuestraAnexosS.muestraSedes',compact('seleccion'));
    }

   
    public function anularSedes($id)
    {

    $seleccion= modeloS4::find($id);
        
       if($seleccion->delete()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Datos de las Sedes y Similares del Ente';
        $bit->save();

         return redirect('regSedes')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
