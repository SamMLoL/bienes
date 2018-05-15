<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Responsable de los Bienes</title>
		 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('img/bandera.png') }}" rel="icon">
	</head>
<body>

<div class="container" id="sha">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="panel">
	               <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
	              <div class="panel-heading text-center"><h5><b>MODIFICAR RESPONSABLE DE LOS BIENES MUEBLES E INMUEBLES <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
		        </div>
			</div>

			<div class="row">
			    <div class="col-md-12 text-center">
			        <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t4->id}}</b></h4>
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
			
		<form role="form" method="POST" action="{{route('responsables.update', $form_t4->id)}}">
       	   <input type="hidden" name="_method" value="PUT">
             {{ csrf_field() }}

		
			<div class="row separar40 ">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codResp">Código del Responsable</label>
						 <input type="text" class="form-control" name="codResp" id="codResp" value="{{$form_t4->codResp}}" maxlength="10">
					</div>
					
					<div class="col-md-4 form-group">
		           	  <label for="tipoResp">Tipo de Responsable</label>
		                <select name="tipoResp" id="tipoResp" class="form-control">
		                    <option value="{{$form_t4->selectResponsables->id}}">{{$form_t4->selectResponsables->opcion}}</option>
		                  @foreach($infoSelect as $form)
		                  	@if($form->id != $form_t4->selectResponsables->id)
		                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
		                    @endif
		                  @endforeach
		                </select>
					</div>

					<div class="col-md-4">
						<label for="cedula">Cédula de Identidad</label>
						<input type="text" class="form-control" name="cedula" id="cedula" value="{{$form_t4->cedula}}" maxlength="8">
					</div>
				</div>
			</div>

			<div class="row separar40">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="nomRes">Nombre del Responsable</label>
						<input type="text" class="form-control" name="nomRes" id="nomRes" value="{{$form_t4->nomRes}}" maxlength="100">
					</div>

					<div class="col-md-4">
					    <label for="apeRes">Apellido del Responsable</label>
						<input type="text" class="form-control" name="apeRes" id="apeRes" value="{{$form_t4->apeRes}}" maxlength="100">
					</div>
			
			        <div class="col-md-4">
						<label for="telfRes">Télefono del Responsable</label>
						<input type="text" class="form-control telefono" name="telfRes" id="telfRes" value="{{$form_t4->telfRes}}" maxlength="20">
				 	</div>
		        </div>
		    </div>

		    <div class="row separar">
		    	<div class="col-md-12">
		    		<div class="col-md-4">
						<label for="cargoRes">Cargo del Responsable</label>
					    <input type="text" class="form-control" name="cargoRes" id="cargoRes" value="{{$form_t4->cargoRes}}" maxlength="120">
					</div>

		    		<div class="col-md-4">
		    		  <div class="input-group">
						<label for="correRes">Correo del Responsable</label>
						@if($form_t4->correRes == '0')
						 <input class="form-control" name="correRes" id="email" value="xxx" maxlength="120" placeholder="Ingrese su correo electrónico" aria-describedby="inputGroupprimary3Status" required autofocus>
						@else
						 <input class="form-control" name="correRes" id="email" value="{{$form_t4->correRes}}" maxlength="120" placeholder="Ingrese su correo electrónico" aria-describedby="inputGroupprimary3Status" required autofocus>
						@endif
					  </div>
				    </div>
					
				    <div class="col-md-4 form-group separar">
                      <label for="codUnidad">Dependencia Administrativa</label>
                         <select name="codUnidad" id="codUnidad2" class="form-control">
                              <option value="{{$form_t4->selectUnidad->id}}">{{$form_t4->selectUnidad->unidad}}</option>
                            @foreach($unidad as $form)
                              @if($form->id != $form_t4->selectUnidad->id)
                              <option value="{{$form->id}}">{{$form->unidad}}</option> 
                              @endif
                            @endforeach
                         </select>
                    </div>
				</div>
		    </div>
		
			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                 <a href="{{ url('/regResponsables') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
    <script src="{{ asset('js/contadorTextarea.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/selectBuscador.js') }}"></script>