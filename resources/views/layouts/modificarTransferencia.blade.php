<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Transferencia</title>
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
	<div class="col-md-12">
		<div class="row">
			<div class="panel">
               <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                   <div class="panel-heading text-center"><h5><b>MODIFICAR TRANSFERENCIA <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
			    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
				    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t27->id}}</b></h4>
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
			
		<form role="form" method="POST" action="{{route('transferencia.update', $form_t27->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
			<div class="row separar40 ">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codOt2_7">Código de Origen</label>
						@if($form_t27->codOt2_7 == '0')
						 <input type="text" class="form-control" name="codOt2_7" id="codOt2_7" value="H-1" maxlength="12">
						@else
						 <input type="text" class="form-control" name="codOt2_7" id="codOt2_7" value="{{$form_t27->codOt2_7}}" maxlength="12">
						@endif
					</div>

					<div class="col-md-4 form-group">
		           	  <label for="codAdq">Código de Adquisición</label>
		               <select name="codAdq" id="codAdq" class="form-control">
		                    <option value="{{$form_t27->selectTransferencia->id}}" disabled>{{$form_t27->selectTransferencia->opcion}}</option>
		                  @foreach($infoSelect as $form)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                  @endforeach
		               </select>
					</div>

					<div class="col-md-4">
						<label for="nomQtra">Nombre de Quien Transfiere</label>
						@if($form_t27->nomQtra == '1')
						 <input type="text" class="form-control" name="nomQtra" id="nomQtra" value="xxx" maxlength="120">
						@else
						 <input type="text" class="form-control" name="nomQtra" id="nomQtra" value="{{$form_t27->nomQtra}}" maxlength="120">
						@endif
					</div>
				</div>
			</div>

			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="nomBen">Nombre del Beneficiario</label>
						@if($form_t27->nomBen == '1')
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="noaplica" maxlength="120">
						@else
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="{{$form_t27->nomBen}}" maxlength="120">
						@endif
					</div>
			
					<div class="col-md-4">
						<label for="numAuto">Número de Autorización</label>
						@if($form_t27->numAuto == '0')
						 <input type="text" class="form-control" name="numAuto" id="numAuto" value="xxx" maxlength="30">
						@else
						 <input type="text" class="form-control" name="numAuto" id="numAuto" value="{{$form_t27->numAuto}}" maxlength="30">
						@endif
					</div>
				
				    <div class="col-md-4">
						<label for="nomRegn">Nombre del Registro o Notaría</label>
						@if($form_t27->nomRegn == '1')
						 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="{{$form_t27->nomRegn}}" maxlength="100">
						@endif
					</div>
				</div>
			</div>	

			<div class="row separar40 ">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="tomo">Tomo</label>
						@if($form_t27->tomo == '1')
						 <input type="text" class="form-control" name="tomo" id="tomo" value="xxx" maxlength="20">
						@else
						 <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t27->tomo}}" maxlength="20">
						@endif
					</div>

					<div class="col-md-4">
						<label for="folio">Folio</label>
						@if($form_t27->folio == '0')
						 <input type="text" class="form-control" name="folio" id="folio" value="99" onkeypress="return soloNum(event)" maxlength="6">
						@else
						 <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t27->folio}}" onkeypress="return soloNum(event)" maxlength="6">
						@endif
					</div>
					
					<div class="col-md-4">
						<label for="feAuto">Fecha de Autorización</label>
						@if($form_t27->feAuto == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feAuto" id="feAuto" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feAuto" id="feAuto" value="{{$form_t27->feAuto}}" maxlength="10">
						@endif
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-12">
				    <div class="col-md-3">
					  <label for="feReg">Fecha del Registro</label>
					@if($form_t27->feReg == '1111-11-11')
					  <input type="text" class="form-control calendario" name="feReg" id="feReg" value="11111111" maxlength="10">
					@else
					  <input type="text" class="form-control calendario" name="feReg" id="feReg" value="{{$form_t27->feReg}}" maxlength="10">
					@endif
				    </div>
				</div>
		    </div>

			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                 <a href="{{ url('/regTransferencia') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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