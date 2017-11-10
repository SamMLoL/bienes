<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloConcurso;
use App\modeloBitacora;

class con_concursoVer extends Controller
{
     public function index(){
     
     $verT2 = modeloConcurso::where('anulart2','0')->get();
     return view('registros.regConcurso', compact('verT2'));
    }

     public function selectId($id){

       $seleccion = modeloConcurso::find($id);
       $seleccion->revisadot2 = 0;
       $seleccion->save();
       return view('muestraReg.muestraConcurso',compact('seleccion'));
    }

     /*FUNCIÓN anularConcur es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

     public function anularConcur($id)
    {
        $seleccion= modeloConcurso::find($id);
        $seleccion->anulart2 = 1;
        
        if($seleccion->save()){

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
