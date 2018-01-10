<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Permuta</title>
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
		              <div class="panel-heading text-center"><h5><b>MODIFICAR PERMUTA <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
			    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
				    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t26->id}}</b></h4>
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
				
		<form role="form" method="POST" action="{{route('permuta.update', $form_t26->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codOt2_6">Código de Origen</label>
						@if($form_t26->codOt2_6 == '0')
						 <input type="text" class="form-control" name="codOt2_6" id="codOt2_6" value="G-1" maxlength="12">
						@else
						 <input type="text" class="form-control" name="codOt2_6" id="codOt2_6" value="{{$form_t26->codOt2_6}}" maxlength="12">
						@endif
					</div>
				

					<div class="col-md-4 form-group">
		           	  <label for="codAdq">Código de Adquisición</label>
		               <select name="codAdq" id="codAdq" class="form-control">
		                    <option value="{{$form_t26->selectPermuta->id}}">{{$form_t26->selectPermuta->opcion}}</option>
		                  @foreach($infoSelect as $form)
		                  	@if($form->id != $form_t26->selectPermuta->id)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                    @endif
		                  @endforeach
		               </select>
					</div>

					<div class="col-md-4">
						<label for="nomCope">Nombre del Copermutante</label>
						@if($form_t26->nomCope == '1')
						 <input type="text" class="form-control" name="nomCope" id="nomCope" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomCope" id="nomCope" value="{{$form_t26->nomCope}}" maxlength="100">
						@endif
					</div>
			    </div>
			</div>

			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="nomBen">Nombre del Beneficiario</label>
						@if($form_t26->nomBen == '1')
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="noaplica" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomBen" id="nomBen" value="{{$form_t26->nomBen}}" maxlength="100">
						@endif
					</div>

				    <div class="col-md-4">
						<label for="nomLic">Nombre de Licitación</label>
						@if($form_t26->nomLic == '1')
						 <input type="text" class="form-control" name="nomLic" id="nomLic" value="xxx" maxlength="100">
						@else
						 <input type="text" class="form-control" name="nomLic" id="nomLic" value="{{$form_t26->nomLic}}" maxlength="100">
						@endif
				    </div>

				    <div class="col-md-4">
						<label for="numLic">Número de licitación</label>
						@if($form_t26->numLic == '0')
						 <input type="text" class="form-control" name="numLic" id="numLic" value="xxx" maxlength="30">
						@else
						 <input type="text" class="form-control" name="numLic" id="numLic" value="{{$form_t26->numLic}}" maxlength="30">
						@endif
				    </div>
				</div>
		    </div> 

		    <div class="row separar40">
		    	<div class="col-md-12">
					<div class="col-md-4">
					    <label for="numCon">Número del Contrato</label>
						@if($form_t26->numCon == '0')
						<input type="text" class="form-control" name="numCon" id="numCon" value="xxx" maxlength="40">
						@else
						<input type="text" class="form-control" name="numCon" id="numCon" value="{{$form_t26->numCon}}" maxlength="30">
						@endif
					</div>
					
				    <div class="col-md-4">
						<label for="nomRegn">Nombre del Registro o Notaría</label>
						@if($form_t26->nomRegn == '1')
					    <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="xxx" maxlength="100">
						@else
						<input type="text" class="form-control" name="nomRegn" id="nomRegn" value="{{$form_t26->nomRegn}}" maxlength="100">
						@endif
					</div>

					<div class="col-md-4">
						<label for="tomo">Tomo</label>
						@if($form_t26->tomo == '1')
						 <input type="text" class="form-control" name="tomo" id="tomo" value="xxx" maxlength="20">
						@else
						 <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t26->tomo}}" maxlength="20">
						@endif
					</div>
				</div>
		    </div>
			
	        <div class="row separar40">
	        	<div class="col-md-12">
					<div class="col-md-4">
						<label for="folio">Folio</label>
						@if($form_t26->folio == '0')
						 <input type="text" class="form-control" name="folio" id="folio" value="99" maxlength="6" onkeypress="return soloNum(event)">
						@else
						 <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t26->folio}}" maxlength="6" onkeypress="return soloNum(event)">
						@endif
					</div>

					<div class="col-md-4">
						<label for="feLic">Fecha de Licitación</label>
						@if($form_t26->feLic == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feLic" id="feLic" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feLic" id="feLic" value="{{$form_t26->feLic}}" maxlength="10">
						@endif
					</div>

					<div class="col-md-4">
						<label for="feLic">Fecha de Contrato</label>
						@if($form_t26->feLic == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feLic" id="feLic" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feLic" id="feLic" value="{{$form_t26->feLic}}" maxlength="10">
						@endif
				    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
				    <div class="col-md-4">
						<label for="feReg">Fecha de Registro</label>
						@if($form_t26->feReg == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="{{$form_t26->feReg}}" maxlength="10">
						@endif
				    </div>
				</div>
			</div>

			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                 <a href="{{ url('/regPermuta') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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