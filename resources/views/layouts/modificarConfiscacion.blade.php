<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modificar Confiscación</title>
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container" id="sha">
   	<div class="row">
   		<div class="col-md-12">
			<div class="row ">
				<div class="panel">
	                <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
	               <div class="panel-heading text-center"><h5><b>MODIFICAR CONFISCACIÓN <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
	          	</div>
			</div>

			<div class="row">
		        <div class="col-md-12 text-center">
		            <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t22->id}}</b></h4>
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
				
			<form role="form" method="POST" action="{{route('confiscacion.update', $form_t22->id)}}">
		       	<input type="hidden" name="_method" value="PUT">
		            {{ csrf_field() }}

				
			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codOt2_2">Código de Origen</label>
						 <input type="text" class="form-control" name="codOt2_2" id="codOt2_2" value="{{$form_t22->codOt2_2}}" maxlength="12" disabled>
					</div>

				    <div class="col-md-4 form-group">
		           	    <label for="codAdq">Código de Adquisición</label>
			               <select name="codAdq" id="codAdq" class="form-control">
			                   <option value="{{$form_t22->selectConfiscacion->id}}">{{$form_t22->selectConfiscacion->opcion}}</option>
			                 @foreach($infoSelect as $form)
			                   <option value="{{$form->id}}">{{$form->opcion}}</option> 
			                 @endforeach
			              </select>
					</div>

					<div class="col-md-4">
						<label for="nomPa">Nombre Propietario Anterior</label>
						@if($form_t22->nomPa == '1')
						 <input type="text" class="form-control" name="nomPa" id="nomPa" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomPa" id="nomPa" value="{{$form_t22->nomPa}}" maxlength="100">
						@endif
					</div>
				</div>
		    </div>

			<div class="row separar40 ">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="nomBen">Nombre del Beneficiario</label>
						@if($form_t22->nomBen == '1')
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="{{$form_t22->nomBen}}" maxlength="100">
						@endif
					</div>
			
					<div class="col-md-4">
						<label for="nomAuto">Nombre de Autoridad</label>
						@if($form_t22->nomAuto == '1')
						 <input type="text" class="form-control" name="nomAuto" id="nomAuto" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomAuto" id="nomAuto" value="{{$form_t22->nomAuto}}" maxlength="100">
						@endif
					</div>
					  
					<div class="col-md-4">
						<label for="numSenc">Número Sentencia Confiscación</label>
						@if($form_t22->numSenc == '0')
						 <input type="text" class="form-control" name="numSenc" id="numSenc" value="xxx" maxlength="30">
						@else
						 <input type="text" class="form-control" name="numSenc" id="numSenc" value="{{$form_t22->numSenc}}" maxlength="30">
						@endif
					</div>
				</div>
		    </div>
				
			<div class="row separar40 ">
				<div class="col-md-12">	
				    <div class="col-md-4">
						<label for="nomRegno">Nombre Registro o Notaría</label>
						@if($form_t22->nomRegno == '1')
						 <input type="text" class="form-control" name="nomRegno" id="nomRegno" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomRegno" id="nomRegno" value="{{$form_t22->nomRegno}}" maxlength="100">
						@endif
					</div>

					<div class="col-md-4">
						<label for="tomo">Tomo</label>
						@if($form_t22->tomo == '1')
						 <input type="text" class="form-control" name="tomo" id="tomo" value="xxx" maxlength="20">
						@else
						 <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t22->tomo}}" maxlength="20">
						@endif
					</div>
					
					<div class="col-md-4">
						<label for="folio">Folio</label>
						@if($form_t22->folio == '0')
						 <input type="text" class="form-control" name="folio" id="folio" value="99" maxlength="6" onkeypress="return soloNum(event)">
						@else
						 <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t22->folio}}" maxlength="6" onkeypress="return soloNum(event)">
						@endif
					</div>
				</div>
		    </div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="feSenc">Fecha Sentencia Confiscación</label>
						@if($form_t22->feSenc == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feSenc" id="feSenc" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feSenc" id="feSenc" value="{{$form_t22->feSenc}}" maxlength="10">
						@endif
					</div>

					<div class="col-md-4">
						<label for="feReg">Fecha de Registro</label>
						@if($form_t22->feReg == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="{{$form_t22->feReg}}" maxlength="10">
						@endif
					</div>
				</div>
			</div>

			<div class="row">
		        <div class="col-md-12 form-group"><br>
		           <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
		           <a href="{{ url('/regConfiscacion') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
		   		 </div>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>

 	<script src="{{ asset('js/jquery-4.1.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>