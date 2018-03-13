<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloAddParroquias;
use App\modeloBitacora;

class controladorAddParroquia extends Controller
{
    public function index(){

      $lastCod = modeloAddParroquias::select('codParroquia')->get()->last();
      $infoSelect = modeloAddParroquias::all();

    	$array= array(
            array("codParroquia","Código de la Parroquia:","Introduzca el código de la parroquia ","100"),
           
    		array("parroquia","Nombre de la Parroquia:","Introduzca el nombre del parroquia","100"),
    		);

    	return view('añadir.añadirParroquia', compact('array','lastCod','infoSelect'));
    }

     public function store(Request $request)
    {

      $duplicado = modeloAddParroquias::where('codParroquia', $request->codParroquia)->get();
      $duplicado2 = modeloAddParroquias::where('parroquia', $request->parroquia)->get();

    
    if($duplicado == '[]'){

        if($duplicado2 == '[]'){
        
        $form_add = new modeloAddParroquias();
        $form_add->codParroquia = $request->codParroquia;
        $form_add->parroquia = $request->parroquia;
        $form_add->revisadoAddParro = 1;

    if($form_add->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 1;
        $bit->referencia = 'Añadió Parroquia';
        $bit->save();

    }
        
      return back()->with('msj', 'Datos Registrados Exitosamente');
      
    }else{
      return back()->with('errormsj', 'El código "'.$request->parroquia.'" ya existe, por favor intente otro código.');
   
      } 

    }else{
      return back()->with('errormsj', 'El Código de la Parroquia "#'.$request->codParroquia.'" ya existe, por favor siga el orden establecido e introduzca una parroquia nueva');
      }  

    }

    public function edit($id)
    {
        $form_add = modeloAddParroquias::find($id);

        return view('layouts.ModificarAñadir.modificarParroquia', compact('form_add'));
    }
    
    public function update(Request $request, $id)
    {
        $form_add = modeloAddParroquias::find($id);
 
        $form_add->parroquia = $request->parroquia;

        if($form_add->save()){
        $bit = new modeloBitacora();
        $bit->user = $_SESSION['id'];
        $bit->accion  = 2;
        $bit->referencia = 'Modificó Parroquia';
        $bit->save();

            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
}
