<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Compra Directa</title>
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
	              <div class="panel-heading text-center"><h5><b>MODIFICAR COMPRA DIRECTA  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
	          	</div>
			</div>

			<div class="row">
	            <div class="col-md-12 text-center">
	                <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t21->id}}</b></h4>
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
			
			<form role="form" method="POST" action="{{route('directa.update', $form_t21->id)}}">
	       	  <input type="hidden" name="_method" value="PUT">
	            {{ csrf_field() }}

			
			<div class="row separar40 ">
			  	<div class="col-md-12">
					<div class="col-md-4">
						<label for="codOt2_1">Código de Origen</label>
						@if($form_t21->codOt2_1 == '0')
						 <input type="text" class="form-control" name="codOt2_1" id="codOt2_1" value="B-1" maxlength="12">
						@else 
						 <input type="text" class="form-control" name="codOt2_1" id="codOt2_1" value="{{$form_t21->codOt2_1}}" maxlength="12">
						@endif
					</div>

					<div class="col-md-4 form-group">
			           	<label for="codAdq">Código de Adquisición</label>
			                <select name="codAdq" id="codAdq" class="form-control">
			                    <option value="{{$form_t21->selectDirecta->id}}" disabled>{{$form_t21->selectDirecta->opcion}}</option>
			                  @foreach($infoSelect as $form)
			                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
			                  @endforeach
			               </select>
					</div>

					<div class="col-md-4">
						<label for="codProvee">Código de Proveedor</label>
							<select name="codProvee" id="codProvee" class="form-control">
				                <option value="{{$form_t21->selectCodProvee->id}}" disabled>{{$form_t21->selectCodProvee->codProvee}}</option>
				              @foreach($infoSelect2 as $form)
			                    <option value="{{$form->id}}" >{{$form->codProvee}}</option>
			                  @endforeach
				            </select> 
					</div>
			    </div>
			</div>

			<div class="row separar40 ">
			  	<div class="col-md-12">
					<div class="col-md-4">
						<label for="numCom">Número Orden de Compra</label>
						@if($form_t21->numCom == '0')
						 <input type="text" class="form-control" name="numCom" id="numCom" value="xxx" maxlength="30">
						@else
						 <input type="text" class="form-control" name="numCom" id="numCom" value="{{$form_t21->numCom}}" maxlength="30">
						@endif
					</div>
		
					<div class="col-md-4">
						<label for="numNota">Número Nota de Entrega</label>
						@if($form_t21->numNota == '0')
						 <input type="text" class="form-control" name="numNota" id="numNota" value="xxx" maxlength="30">
						@else
						 <input type="text" class="form-control" name="numNota" id="numNota" value="{{$form_t21->numNota}}" maxlength="30">
						@endif
					</div>
				  
				    <div class="col-md-4">
						<label for="numFac">Número de Factura</label>
						@if($form_t21->numFac == '0')
						 <input type="text" class="form-control" name="numFac" id="numFac" value="xxx" maxlength="30">
						@else
						 <input type="text" class="form-control" name="numFac" id="numFac" value="{{$form_t21->numFac}}" maxlength="30">
						@endif
				    </div>
			    </div>
			</div>
				
			<div class="row separar40 ">
			    <div class="col-md-12">
			        <div class="col-md-4">
						<label for="feCom">Fecha Orden de Compra</label>
						@if($form_t21->feCom == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feCom" id="feCom" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feCom" id="feCom" value="{{$form_t21->feCom}}" maxlength="10">
						@endif
				    </div>

				    <div class="col-md-4">
						<label for="feNota">Fecha Nota de Entrega</label>
						@if($form_t21->feNota == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feNota" id="feNota" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feNota" id="feNota" value="{{$form_t21->feNota}}" maxlength="10">
						@endif
				    </div>
				
				    <div class="col-md-4">
						<label for="feFac">Fecha de Factura</label>
						@if($form_t21->feFac == '1111-11-11')
						 <input type="text" class="form-control calendario" name="feFac" id="feFac" value="11111111" maxlength="10">
						@else
						 <input type="text" class="form-control calendario" name="feFac" id="feFac" value="{{$form_t21->feFac}}" maxlength="10">
						@endif
				    </div>
			    </div>
			</div>
			
			<div class="row">
	            <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                 <a href="{{ url('/regDirecta') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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