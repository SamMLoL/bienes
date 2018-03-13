<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloS4;
use App\sel_proveedores;
use App\sel_sedes;
use App\sel_paises;
use App\sel_parroquias;
use App\sel_ciudad;
use App\modeloBitacora;		


class controladorS4 extends Controller
{
    
    public function selectLocaParro(Request $request)
    {
         if($request->ajax()){
            $s4 = sel_parroquias::selectParroquias();
          return response()->json($s4);
      }
    }

    public function modifiLocaParro(Request $request, $id)
    {
         if($request->ajax()){
            $modificarParro = sel_parroquias::modifiqueParroquias($id);
          return response()->json($modificarParro);
      }
    }

    public function selectLocaCiudad(Request $request)
    {
         if($request->ajax()){
            $s4 = sel_ciudad::selectCiudad();
          return response()->json($s4);
      }
    }

    public function modifiLocaCiudad(Request $request, $id)
    {
         if($request->ajax()){
            $modificarCiudad = sel_ciudad::modifiqueCiudades($id);
          return response()->json($modificarCiudad);
      }
    }

    public function index()
    {
		$lastCod = modeloS4::select('codSede')->get()->last();
        $lugarSedes = sel_sedes::all();
		$selectLoca = sel_proveedores::all();
    	$selectPais = sel_paises::all();
    	$selectParroquia = sel_parroquias::all();
        $selectCiudad = sel_ciudad::all();
    	

    	$codSede = array(
    		array("codSede","Código de la Sede:","Introduzca el código de la sede","10"),
    		);

    	$selectSede = array(
            array("tipoSede","Tipo de Sede:","2"),
            );

    	$espeSede = array(
    		array("espeSede","Especifique Tipo de Sede o Lugar:","Especifique el tipo de sede","100"),
    		);

    	$descSede = array(
    		array("descSede","Descripción de la Sede:","Describa la sede","255"),
    		);

        $localizacion = array(
            array("localizacion","Localización:","2"),
            );

        $codPais = array(
            array("codPais","Código del País donde se Ubica la Sede:","2"),
            );

    	$espePais = array(
    		array("espeOtroPais","Especifique Otro País:","Especifique otro país","100"),
    		);

        $codParroquia = array(
            array("codParroquia","Código de Parroquia donde se Ubica el Ente:","2"),
            );

        $codCiudad = array(
            array("codCiudad","Código de la Ciudad donde se Ubica el Ente:","2"),
            );


        $espeCiudad = array(
            array("espeOtroCiudad","Especifique Nombre de la Otra Ciudad:","Especifique el nombre de la otra ciudad","100"),
            );

        $urbanizacion = array(
            array("urbanizacion","Urbanización:","Introduzca la urbanización de la sede","30"),
            );

        $calleAvenida = array(
            array("calleAvenida","Calle / Avenida:","Introduzca la calle o avenida de la sede","50"),
            );

        $casaEdificio = array(
            array("casaEdificio","Casa / Edificio:","Introduzca la casa o avenida de la sede","50"),
            );

        $piso = array(
            array("piso","Piso:","Introduzca el piso donde se localiza la sede","20"),
            );



    	return view('AnexosS.visSedes', compact('lastCod','lugarSedes','selectLoca','selectPais','selectParroquia','selectCiudad','codSede','selectSede','espeSede','descSede','localizacion','codPais','espePais','codParroquia','codCiudad','espeCiudad','urbanizacion','calleAvenida','casaEdificio','piso'));
    }

    public function store(Request $request)
    {
        $form_s4 = new modeloS4();
        $form_s4->tipoSede = $request->tipoSede;
        $form_s4->localizacion = $request->localizacion;
        $form_s4->codPais = $request->codPais;
        $form_s4->revisadoS4 = 1;

        if($form_s4->codSede = $request->codSede == '')
        {
            $form_s4->codSede = '1';
        }else{
            $form_s4->codSede = $request->codSede;
        }


        if($form_s4->codParroquia = $request->codParroquia == '99')
        {
            $form_s4->codParroquia = '1';
        }else{
            $form_s4->codParroquia = $request->codParroquia;
        }

        if($form_s4->codCiudad = $request->codCiudad == '99')
        {
            $form_s4->codCiudad = '1';
        }else{
            $form_s4->codCiudad = $request->codCiudad;
        }

        if($form_s4->espeSede = $request->espeSede == '')
        {
            $form_s4->espeSede = '1';
        }else{
            $form_s4->espeSede = $request->espeSede;
        }

        if($form_s4->descSede = $request->descSede == '')
        {
            $form_s4->descSede = '1';
        }else{
            $form_s4->descSede = $request->descSede;
        }

        if($form_s4->espeOtroPais = $request->espeOtroPais == '')
        {
            $form_s4->espeOtroPais = '1';
        }else{
            $form_s4->espeOtroPais = $request->espeOtroPais;
        }

        if($form_s4->espeOtroCiudad = $request->espeOtroCiudad == '')
        {
            $form_s4->espeOtroCiudad = '1';
        }else{
            $form_s4->espeOtroCiudad = $request->espeOtroCiudad;
        }

        if($form_s4->urbanizacion = $request->urbanizacion == '')
        {
            $form_s4->urbanizacion = '1';
        }else{
            $form_s4->urbanizacion = $request->urbanizacion;
        }

        if($form_s4->calleAvenida = $request->calleAvenida == '')
        {
            $form_s4->calleAvenida = '1';
        }else{
            $form_s4->calleAvenida = $request->calleAvenida;
        }

        if($form_s4->casaEdificio = $request->casaEdificio == '')
        {
            $form_s4->casaEdificio = '1';
        }else{
            $form_s4->casaEdificio = $request->casaEdificio;
        }

        if($form_s4->piso = $request->piso == '')
        {
            $form_s4->piso = '1';
        }else{
            $form_s4->piso = $request->piso;
        }

        if($form_s4->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Datos de las Sedes y Similares del Ente';
          $bit->save();

         

        return back()->with('msj', 'Datos Registrados Exitosamente');
        }else {
        return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

     public function edit($id)
    {   

        $form_s4 = modeloS4::find($id);
        $lastCod = modeloS4::select('codSede')->get()->last();
        $lugarSedes = sel_sedes::all();
        $selectLoca = sel_proveedores::all();
        $selectPais = sel_paises::all();
        $selectParroquia = sel_parroquias::all();
        $selectCiudad = sel_ciudad::all();
        
        return view('layouts.ModificarAnexosS.modificarSedes', compact('form_s4','lastCod','lugarSedes','selectLoca','selectPais','selectParroquia','selectCiudad'));
    }

    public function update(Request $request, $id)
    {
        $form_s4 = new modeloS4();
        $form_s4->tipoSede= $request->tipoSede;
        $form_s4->localizacion = $request->localizacion;
        $form_s4->codPais = $request->codPais;

        if($form_s4->codSede = $request->codSede == '')
        {
            $form_s4->codSede = '1';
        }else{
            $form_s4->codSede = $request->codSede;
        }

        if($form_s4->codParroquia = $request->codParroquia == '99')
        {
            $form_s4->codParroquia = '1';
        }else{
            $form_s4->codParroquia = $request->codParroquia;
        }

        if($form_s4->codCiudad = $request->codCiudad == '99')
        {
            $form_s4->codCiudad = '1';
        }else{
            $form_s4->codCiudad = $request->codCiudad;
        }

        if($form_s4->espeSede = $request->espeSede == '')
        {
            $form_s4->espeSede = '1';
        }else{
            $form_s4->espeSede = $request->espeSede;
        }

        if($form_s4->descSede = $request->descSede == '')
        {
            $form_s4->descSede = '1';
        }else{
            $form_s4->descSede = $request->descSede;
        }

        if($form_s4->espeOtroPais = $request->espeOtroPais == '')
        {
            $form_s4->espeOtroPais = '1';
        }else{
            $form_s4->espeOtroPais = $request->espeOtroPais;
        }

        if($form_s4->espeOtroCiudad = $request->espeOtroCiudad == '')
        {
            $form_s4->espeOtroCiudad = '1';
        }else{
            $form_s4->espeOtroCiudad = $request->espeOtroCiudad;
        }

        if($form_s4->urbanizacion = $request->urbanizacion == '')
        {
            $form_s4->urbanizacion = '1';
        }else{
            $form_s4->urbanizacion = $request->urbanizacion;
        }

        if($form_s4->calleAvenida = $request->calleAvenida == '')
        {
            $form_s4->calleAvenida = '1';
        }else{
            $form_s4->calleAvenida = $request->calleAvenida;
        }

        if($form_s4->casaEdificio = $request->casaEdificio == '')
        {
            $form_s4->casaEdificio = '1';
        }else{
            $form_s4->casaEdificio = $request->casaEdificio;
        }

        if($form_s4->piso = $request->piso == '')
        {
            $form_s4->piso = '1';
        }else{
            $form_s4->piso = $request->piso;
        }

        if($form_s4->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Datos de las Sedes y Similares del Ente';
          $bit->save();

         

        return back()->with('msj', 'Datos modificados exitosamente');
        }else {
        return back()->with('errormsj', 'Los datos no se modificaron');
        }
    }
}
