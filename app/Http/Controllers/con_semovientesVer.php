<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloSemovientes;
use App\modeloBitacora;


class con_semovientesVer extends Controller
{
    public function index(){
        
    $verT10= modeloSemovientes::all();

    return view('registros.regSemovientes', compact('verT10'));

    }

    public function selectId($id){

    $seleccion = modeloSemovientes::find($id);
    $seleccion->revisadot10 = 0;
    $seleccion->save();

       return view('muestraReg.muestraSemovientes',compact('seleccion'));
    }

     /*FUNCIÓN anularT10 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularSemo($id)
    {
    
    $seleccion= modeloSemovientes::find($id);
        
    if($seleccion->delete()){
       	$bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Semovientes';
        $bit->save();
          
         return redirect('regSemovientes')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
