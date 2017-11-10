<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloBitacora;

class controladorBitacora extends Controller
{
    
    public function enviarVariable(){

      $bitacora = modeloBitacora::all();

      return view('bitacora.bitacora', compact('bitacora'));

    }

  
}
