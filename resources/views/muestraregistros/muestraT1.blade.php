@extends('layouts.app')

@section('content')

    <div class="row separar">
        <div class="col-md-12 ">
            <div class="panel">
                <div class="panel-heading text-center"><h5><b>REGISTRO DE TABLA T1</b></h5></div>
            </div>
        </div>
    </div>

    <div class="row">
    	<div class="col-md-3 form-group">
    		<label>CÓDIGO DEL PROVEEDOR</label><br>
    		{{$seleccion->cod_proveedor_t1}}
    	</div>

		<div class="col-md-3 form-group">
    		<label>DESCRIPCIÓN DEL PROVEEDOR</label><br>
    		{{$seleccion->desc_prove_t1}}
    	</div>

    	<div class="col-md-3 form-group">
    		<label>TIPO DE PROVEEDOR</label><br>
    		{{$seleccion->selectt1->opcion}}
    	</div>
    	
      @if($seleccion->otr_descr_t1 == '0')
    	<div class="col-md-3 form-group">
    		<label>OTRA DESCRIPCION</label><br>
    		XXX
    	</div>

      @else
          <div class="col-md-3 form-group">
    		<label>OTRA DESCRIPCION</label><br>
    		{{$seleccion->otr_descr_t1}}
    	</div>  
      @endif
   	</div>

    <div class="row text-center separar">
    	<div class="col-md-12">
    		<a href="{{URL::previous() }}"  class="btn btn-lg btn-danger" ><b><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> Regresar</a></b>
    	</div>
    </div>
@endsection
