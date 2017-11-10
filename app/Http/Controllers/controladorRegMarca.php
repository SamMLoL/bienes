<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloRegMarca;
use App\sel_marca;
use App\sel_marca1;
use App\sel_marca2;
use App\modeloMarcas;
use App\modeloBitacora;


class controladorRegMarca extends Controller
{
    public function index()
    {   
        $modelo= modeloRegMarca::all();
        $infoSelect= sel_marca::orderBy('opcion', 'asc')->get();
        $infoSelect1= sel_marca1::all();
        $infoSelect2= sel_marca2::all();


          return view('tablasForm.visMarcas', compact('modelo','infoSelect','infoSelect1','infoSelect2'));
    }

     public function getMarcas(Request $request, $id){
    
      if($request->ajax()){
         $denCoMarcas = sel_marca1::denCoMarcas($id);
          return response()->json($denCoMarcas);
      }
    }


    public function getFabri(Request $request, $id){
    
      if($request->ajax()){
         $nomFabricante = sel_marca2::nomFabricante($id);
          return response()->json($nomFabricante);
      }
    }

    
    public function store(Request $request)
    {
        $form_t5 = new modeloRegMarca();
        $form_t5->denCoMar = $request->denCoMar;
        $form_t5->codMarca = $request->codMarca;
        $form_t5->nomFabri = $request->nomFabri;
        $form_t5->revisadot5 = 1;
        $form_t5->anulart5 = 0;

         if($form_t5->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Marcas';
          $bit->save();

            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }

    
    public function edit($id)
    {
        $form_t5 = modeloRegMarca::find($id);
       

        return view('layouts.modificarT-5', compact('form_t5'));
    }

    

    
    public function update(Request $request, $id)
    {
        $form_t5 = modeloRegMarca::find($id);
        $form_t5->codMarca = $request->codMarca;
        $form_t5->denCoMar = $request->denCoMar;
        $form_t5->nomFabri = $request->nomFabri;
 

         if($form_t5->save()){
            return back()->with('msj', 'Datos Modificados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

    }


  //AQUI ME ELIMINA EL REGISTRO DEL modeloRegMarca
    public function destroy($id)
    {
      

      modeloRegMarca::destroy($id);
      
      
      return redirect('regMarca')->with('msj', 'Registro Eliminado Exitosamente');


    }


}
