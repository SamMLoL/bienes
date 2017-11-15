<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloModelos;
use App\sel_marca1;


class con_modelosVer extends Controller
{
    public function index(){
        
        $infoSelect = sel_marca1::all();
        $verT6= modeloModelos::where('anulart6', '0')->get();

        return view('añadir.historicoModelos', compact('verT6','infoSelect'));

    }

    public function selectId($id){

        $seleccion = modeloModelos::find($id);
        $seleccion->revisadot6 = 0;
        $seleccion->save();

       return view('muestraReg.fichaModelos',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularModelos($id)
    {
        $seleccion= modeloModelos::find($id);
        $seleccion->anulart6 = 1;
        
       if($seleccion->save()){
         return redirect('historicoModelos')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
