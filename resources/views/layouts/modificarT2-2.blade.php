<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modificar Anexo T2-1</title>
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="container" id="sha">
		<div class="row separar">
			<div class="panel">
               <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
              <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T2-2</b></h5></div>
          	</div>
		</div>

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
		
		<form role="form" method="POST" action="{{route('t22.update', $form_t22->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="codOt2_2">CÓDIGO DE ORIGEN</label>
				@if($form_t22->codOt2_2 == '0')
				 <input type="text" class="form-control" name="codOt2_2" id="codOt2_2" value="C-1">
				@else
				 <input type="text" class="form-control" name="codOt2_2" id="codOt2_2" value="{{$form_t22->codOt2_2}}">
				@endif
			</div>
			

			<div class="col-md-3 form-group">
           	  <label for="codAdq">CÓDIGO FORMA DE ADQUISICIÓN</label>
               <select name="codAdq" id="codAdq" class="form-control">
                    <option value="{{$form_t22->selectt22->id}}">{{$form_t22->selectt22->opcion}}</option>
                  @foreach($migselectT22 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
               </select>
			</div>

			<div class="col-md-3">
				<label for="nomPa">NOMBRE PROPIETARIO ANTERIOR</label>
				@if($form_t22->nomPa == '1')
				 <input type="text" class="form-control" name="nomPa" id="nomPa" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomPa" id="nomPa" value="{{$form_t22->nomPa}}">
				@endif
			</div>
			
			<div class="col-md-3">
				<label for="nomBen">NOMBRE DEL BENEFICIARIO</label>
				@if($form_t22->nomBen == '1')
				 <input type="text" class="form-control" name="nomBen" id="nomBen" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomBen" id="nomBen" value="{{$form_t22->nomBen}}">
				@endif
			</div>
		</div>

		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="nomAuto">NOMBRE DE LA AUTORIDAD</label>
				@if($form_t22->nomAuto == '0')
				 <input type="text" class="form-control" name="nomAuto" id="nomAuto" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomAuto" id="nomAuto" value="{{$form_t22->nomAuto}}">
				@endif
			  </div>
			  
			  <div class="col-md-3">
				<label for="numSenc">N° SENTENCIA DE CONFISCACIÓN</label>
				@if($form_t22->numSenc == '0')
				 <input type="text" class="form-control" name="numSenc" id="numSenc" value="XXX">
				@else
				 <input type="text" class="form-control" name="numSenc" id="numSenc" value="{{$form_t22->numSenc}}">
				@endif
			  </div>

			
		       <div class="col-md-3">
				<label for="nomRegno">NOMBRE REGISTRO O NOTARÍA</label>
				@if($form_t22->nomRegno == '1')
				 <input type="text" class="form-control" name="nomRegno" id="nomRegno" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomRegno" id="nomRegno" value="{{$form_t22->nomRegno}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="tomo">TOMO</label>
				@if($form_t22->tomo == '1')
				 <input type="text" class="form-control" name="tomo" id="tomo" value="XXX">
				@else
				 <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t22->tomo}}">
				@endif
			  </div>
			</div>
		    
			<div class="row separar40 ">
			  <div class="col-md-3">
				<label for="folio">FOLIO</label>
				@if($form_t22->folio == '0')
				 <input type="text" class="form-control" name="folio" id="folio" value="99">
				@else
				 <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t22->folio}}">
				@endif
			  </div>

			   <div class="col-md-3">
				<label for="feSenc">FECHA SENTENCIA CONFISCACIÓN</label>
				@if($form_t22->feSenc == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feSenc" id="feSenc" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feSenc" id="feSenc" value="{{$form_t22->feSenc}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="feReg">FECHA DE REGISTRO</label>
				@if($form_t22->feReg == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="{{$form_t22->feReg}}">
				@endif
			  </div>
		</div>

		<div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT2-2') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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