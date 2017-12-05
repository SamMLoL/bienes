<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloConcurso;
use App\modeloBitacora;

class con_concursoVer extends Controller
{
     public function index(){
     
     $verT2 = modeloConcurso::all();
     return view('registros.regConcurso', compact('verT2'));
    }

     public function selectId($id){

       $seleccion = modeloConcurso::find($id);
       $seleccion->revisadot2 = 0;
       $seleccion->save();
       return view('muestraReg.muestraConcurso',compact('seleccion'));
    }

     public function anularConcur($id)
    {
        $seleccion= modeloConcurso::find($id);
       
        
        if($seleccion->delete()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Compra por Concurso';
          $bit->save();

         return redirect('regConcurso')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
