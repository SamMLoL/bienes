<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloRegMarca;
use App\modeloBitacora;


class con_marcaVer extends Controller
{
       public function index(){
        
        $verT5= modeloRegMarca::where('anulart5', '0')->get();
    
        return view('registros.regMarca', compact('verT5','bitacora'));

    }


    public function selectId($id){

        $seleccion = modeloRegMarca::find($id);
        $seleccion->revisadot5 = 0;
        $seleccion->save();

       return view('muestraReg.muestraMarca',compact('seleccion'));
    }

     /*FUNCIÓN anularT3 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA

    public function anularMarca($id)
    {
        $seleccion= modeloRegMarca::find($id);
        $seleccion->anulart5 = 1;
        
       if($seleccion->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 3;
        $bit->referencia = 'Marcas';
        $bit->save();

         return redirect('regMarca')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }*/

   public function destroy(Request $request)
    {
      echo "hola" ;
    }

}
