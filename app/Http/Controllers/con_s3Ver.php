<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS3;
use App\modeloBitacora;


class con_s3Ver extends Controller
{
    public function index(){
        
        $verS3= modeloS3::all();

        return view('RegistrosS.regPatrimonial', compact('verS3'));

    }

    public function selectId($id){

    $seleccion = modeloS3::find($id);
    $seleccion->revisadoS3 = 0;
    $seleccion->save();

       return view('MuestraAnexosS.muestraPatrimonial',compact('seleccion'));
    }

   
    public function anularPatrimonial($id)
    {

    $seleccion= modeloS3::find($id);
        
       if($seleccion->delete()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Datos del Responsable Patrimonial';
        $bit->save();

         return redirect('regMaxima')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
