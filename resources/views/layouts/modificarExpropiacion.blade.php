<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Expropiación</title>
		 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('img/bandera.png') }}" rel="icon">
	</head>
<body>

<div class="container" id="sha">
  	<div class="row">
  		<div class="col-md-12">
		  	<div class="row">
				<div class="panel">
		            <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
		            <div class="panel-heading text-center"><h5><b>MODIFICAR EXPROPIACIÓN <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
	          	</div>
			</div>

			<div class="row">
		        <div class="col-md-12 text-center">
		           <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t25->id}}</b></h4>
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
			
		<form role="form" method="POST" action="{{route('expropiacion.update', $form_t25->id)}}">
	       	<input type="hidden" name="_method" value="PUT">
	            {{ csrf_field() }}

			
			<div class="row separar40 ">
			  	<div class="col-md-12">
					<div class="col-md-4">
						<label for="codOt2_4">Código de Origen</label>
						@if($form_t25->codOt2_5 == '0')
						<input type="text" class="form-control" name="codOt2_5" id="codOt2_5" value="E-1" maxlength="12">
						@else
						<input type="text" class="form-control" name="codOt2_5" id="codOt2_5" value="{{$form_t25->codOt2_5}}" maxlength="12">
						@endif
					</div>

					<div class="col-md-4 form-group">
		           	  <label for="codAdq">Código de Adquisición </label>
		               <select name="codAdq" id="codAdq" class="form-control">
		                    <option value="{{$form_t25->selectExpropiacion->id}}">{{$form_t25->selectExpropiacion->opcion}}</option>
		                  @foreach($infoSelect as $form)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                  @endforeach
		               </select>
					</div>

					<div class="col-md-4">
						 <label for="nomPan">Nombre Propietario Anterior</label>
						@if($form_t25->nomPan == '1')
						 <input type="text" class="form-control" name="nomPan" id="nomPan" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomPan" id="nomPan" value="{{$form_t25->nomPan}}">
						@endif
					</div>
				</div>
			</div>

			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="nomBen">Nombre del Beneficiario</label>
						@if($form_t25->nomBen == '1')
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="noaplica">
						@else
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="{{$form_t25->nomBen}}">
						@endif
					</div>
			
				 	<div class="col-md-4">
						<label for="nomAut">Nombre de la Autoridad</label>
						@if($form_t25->nomAut == '1')
						 <input type="text" class="form-control" name="nomAut" id="nomAut" value="xxx">
						@else
						 <input type="text" class="form-control" name="nomAut" id="nomAut" value="{{$form_t25->nomAut}}">
						@endif
				    </div>

				    <div class="col-md-4">
						<label for="numSena">Número Sentencia o Acto</label>
						@if($form_t25->numSena == '0')
						 <input type="text" class="form-control" name="numSena" id="numSena" value="xxx">
						@else
						 <input type="text" class="form-control" name="numSena" id="numSena" value="{{$form_t25->numSena}}">
						@endif
				    </div>
				</div>
			</div>

			<div class="row separar40">
				<div class="col-md-12">	
				    <div class="col-md-4">
						<label for="nomRegn">Nombre Registro o Notaría</label>
						@if($form_t25->nomRegn == '1')
						 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="xxx">
						@else
						 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="{{$form_t25->nomRegn}}">
						@endif
					</div>

					<div class="col-md-4">
						<label for="tomo">Tomo</label>
						@if($form_t25->tomo == '1')
						 <input type="text" class="form-control" name="tomo" id="tomo" value="xxx">
						@else
						 <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t25->tomo}}">
						@endif
					</div>

					<div class="col-md-4">
						<label for="folio">Folio</label>
						@if($form_t25->folio == '0')
						 <input type="text" class="form-control" name="folio" id="folio" value="99" onkeypress="return soloNum(event)">
						@else
						 <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t25->folio}}" onkeypress="return soloNum(event)">
						@endif
					</div>
				</div>
			</div>

			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="feSena">Fecha Sentencia o Acto</label>
						@if($form_t25->feSena == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feSena" id="feSena" value="11111111">
						@else
						 <input type="text" class="form-control calendario" name="feSena" id="feSena" value="{{$form_t25->feSena}}">
						@endif
					</div>

					<div class="col-md-4">
						<label for="feReg">Fecha de Registro</label>
						@if($form_t25->feReg == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="11111111">
						@else
						 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="{{$form_t25->feReg}}">
						@endif
					</div>
				</div>
		    </div>

			<div class="row">
	            <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                <a href="{{ url('/regExpropiacion') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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