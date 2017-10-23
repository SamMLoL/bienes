<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT22;
use App\modeloBitacora;

class controladorVerT22 extends Controller
{
    public function index(){
      	
      	$verT22= modeloT22::where('anulart22', '0')->get();

      	return view('registros.registroT2-2', compact('verT22'));

    }

    public function selectId22($id){

      	$seleccion = modeloT22::find($id);
        $seleccion->revisadot22 = 0;
        $seleccion->save();

       return view('muestraReg.muestraT2-2',compact('seleccion'));
    }

     /*FUNCIÓN anularT21 es para simular la eliminacion del registro en el datatable CUANDO ESTA EN 0 SE MUESTRA Y CUANDO CAMBIA A 1 EL REGISTRO NO SE MUESTRA*/

    public function anularT22($id)
    {
        $seleccion= modeloT22::find($id);
        $seleccion->anulart22 = 1;
        
       if($seleccion->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 3;
          $bit->referencia = 'Anexo T2-2';
          $bit->save();

         return redirect('registroT2-2')->with('msj', 'Registro Eliminado Exitosamente');
         } else {
         return redirect()->with('errormsj', 'Los datos no se guardaron');
       }
    }
}
