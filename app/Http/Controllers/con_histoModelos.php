<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloModelos;
use App\sel_marca;
use App\modeloBitacora;

class con_histoModelos extends Controller
{
    public function index()
    {
        
        $verT6= modeloModelos::all();

        return view('añadir.historicoModelos', compact('verT6'));
    }

    public function selectId($id)
    {

        $seleccion = modeloModelos::find($id);
        $seleccion->save();

       return view('añadir.fichaModelos', compact('seleccion'));
    }

    public function destroy($id)
    {
      
      modeloModelos::destroy($id);

      return redirect('histoModelos')->with('msj', 'Registro Eliminado Exitosamente');

    }

}
