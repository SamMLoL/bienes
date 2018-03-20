<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Seguros</title>
		 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('img/bandera.png') }}" rel="icon">
	</head>
<body>
<style>
	#montoAse::-webkit-input-placeholder { color: #A24040; opacity: 0.9; font-size: 13px; } /* WebKit */
	#montoAse::-moz-placeholder { color: #A24040; opacity: 0.9; font-size: 13px;} /* Firefox 19+ *

</style>
<div class="container" id="sha">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="panel">
		            <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
		            <div class="panel-heading text-center"><h5><b>MODIFICAR SEGUROS <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
			    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t3->id}}</b></h4>
				</div>
			</div>
	    <hr>

			<div class="row">
	        	<div class="col-md-12 desvanecer">
	          @if(session()->has('msj'))
	              <center><div  class="col-md-12  alert alert-success" role="alert">{{session('msj')}}</div></center>
	                 @endif

	                 @if(session()->has('errormsj'))
	              <center><div  class="col-md-12  alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
	          @endif
	        	</div>
	     	</div>
		
		<form role="form" method="POST" action="{{route('seguros.update', $form_t3->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
			<div class="row separar40 ">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codRegT3">Código del Registro</label>
						 <input type="text" class="form-control" name="codRegT3" id="codRegT3" value="{{$form_t3->codRegT3}}" maxlength="10">
					</div>

					<div class="col-md-4 form-group">
		           	   <label for="compAse">Compañía Aseguradoras</label>
		                 <select name="compAse" id="compAse" class="form-control">
		                    <option value="{{$form_t3->selectSeguros->id}}">{{$form_t3->selectSeguros->opcion}}</option>
		                  @foreach($infoSelect as $form)
		                  	@if($form->id != $form_t3->selectSeguros->id)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                    @endif
		                  @endforeach
		                 </select>
					</div>

					<div class="col-md-4">
						<label for="otraCom">Otra Compañía Aseguradora</label>
						@if($form_t3->otraCom == '1')
						 <input type="text" class="form-control" name="otraCom" id="otraCom" value="noaplica" maxlength="100" disabled>
						@else
						 <input type="text" class="form-control" name="otraCom" id="otraCom" value="{{$form_t3->otraCom}}" maxlength="100">
						@endif
					</div>
				</div>
			</div>
			
			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="numPoli">Número de Póliza</label>
						@if($form_t3->numPoli == '0')
						 <input type="text" class="form-control" name="numPoli" id="numPoli" value="xxx" maxlength="30">
						@else
						 <input type="text" class="form-control" name="numPoli" id="numPoli" value="{{$form_t3->numPoli}}" maxlength="30">
						@endif
					</div>
				
					<div class="col-md-4 form-group">
		           	  <label for="tipPoli">Tipo de Póliza</label>
		                 <select name="tipPoli" id="tipPoli" class="form-control">
		                    <option value="{{$form_t3->selectSeguros1->id}}">{{$form_t3->selectSeguros1->opcion}}</option>
		                  @foreach($infoSelect1 as $form)
		                  	@if($form->id != $form_t3->selectSeguros1->id)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option>
		                    @endif 
		                  @endforeach
		                 </select>
					</div>

					<div class="col-md-4">
						<label for="montoAse">Monto Asegurado</label>
						@if($form_t3->montoAse == '0')
						 <input type="text" class="form-control money" name="montoAse" id="montoAse" value="99.99" maxlength="26">
						@else
						 <input type="text" class="form-control money" name="montoAse" id="montoAse" value="{{$form_t3->montoAse}}" maxlength="26">
						@endif
					</div>
			    </div>
			</div> 

			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4 form-group">
		           	  <label for="moneda">Moneda</label>
		               <select name="moneda" id="moneda" class="form-control">
		                    <option value="{{$form_t3->selectSeguros2->id}}">{{$form_t3->selectSeguros2->opcion}}</option>
		                  @foreach($infoSelect2 as $form)
		                  	@if($form->id != $form_t3->selectSeguros2->id)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                    @endif
		                  @endforeach
		               </select>
					</div>
					
				    <div class="col-md-4">
						<label for="espeMoneda">Especifique la Moneda</label>
						@if($form_t3->espeMoneda == '1')
						 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="noaplica" maxlength="30" disabled>
						@else
						 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="{{$form_t3->espeMoneda}}" maxlength="30" >
						@endif
					</div>
				
					<div class="col-md-4">
						<label for="feiniPoli">Fecha Inicio de Póliza</label>
						@if($form_t3->feiniPoli == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feiniPoli" id="feiniPoli" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feiniPoli" id="feiniPoli" value="{{$form_t3->feiniPoli}}" maxlength="10">
						@endif
			  		</div>
				</div>
			</div>

			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="fefinPoli">Fecha Final de Póliza</label>
						@if($form_t3->fefinPoli == '1111-11-11')
						 <input type="text" class="form-control calendario" name="fefinPoli" id="fefinPoli" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="fefinPoli" id="fefinPoli" value="{{$form_t3->fefinPoli}}" maxlength="10">
						@endif
					</div>
					
					<div class="col-md-4 form-group">
		           	  <label for="poseRes">Posee Responsabilidad Civil</label>
		               	<select name="poseRes" id="poseRes" class="form-control">
		                    <option value="{{$form_t3->selectSeguros3->id}}">{{$form_t3->selectSeguros3->opcion}}</option>
		                  @foreach($infoSelect3 as $form)
		                  	@if($form->id != $form_t3->selectSeguros3->id)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                    @endif
		                  @endforeach
		              	</select>
					</div>

					<div class="col-md-4 form-group">
		           	  <label for="tipoCobe">Tipo de Cobertura de la Póliza </label>
		               	<select name="tipoCobe" id="tipoCobe" class="form-control">
		                    <option value="{{$form_t3->selectSeguros4->id}}">{{$form_t3->selectSeguros4->opcion}}</option>
		                  @foreach($infoSelect4 as $form)
		                  	@if($form->id != $form_t3->selectSeguros4->id)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                    @endif
		                  @endforeach
		              	</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4 form-group">
						<label for="espeCobe">Especifique el Tipo de Cobertura </label>
							@if($form_t3->espeCobe == '1')
							 <input type="text" class="form-control" name="espeCobe" id="espeCobe" value="noaplica" maxlength="100" disabled>
							@else
							 <input type="text" class="form-control" name="espeCobe" id="espeCobe" value="{{$form_t3->espeCobe}}" maxlength="100">
							@endif
					</div>

					<div class="col-md-4 form-group">
						<label for="descCobe">Descripción de la Cobertura </label>
							@if($form_t3->descCobe == '1')
							 <input type="text" class="form-control" name="descCobe" id="descCobe" value="xxx" maxlength="200">
							@else
							 <input type="text" class="form-control" name="descCobe" id="descCobe" value="{{$form_t3->descCobe}}" maxlength="200">
							@endif
					</div>
				</div>
			</div>

			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                 <a href="{{ url('/regSeguros') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
	              </div>
	        </div>
	    </div>
	</div>
</div>
</form>
</body>
</html>

 	<script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/inputDinamicoanexosT.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
 	<script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
