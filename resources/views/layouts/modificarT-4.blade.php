<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Anexo T-4</title>
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
              <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T-4</b></h5></div>
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
		
		<form role="form" method="POST" action="{{route('t4.update', $form_t4->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="codResp">CÓDIGO DEL RESPONSABLE</label>
				 <input type="text" class="form-control" name="codResp" id="codResp" value="{{$form_t4->codResp}}" maxlength="10">
			</div>
			

			<div class="col-md-3 form-group">
           	  <label for="tipoResp">TIPO DE RESPONSABLE</label>
               <select name="tipoResp" id="tipoResp" class="form-control">
                    <option value="{{$form_t4->selectt4->id}}">{{$form_t4->selectt4->opcion}}</option>
                  @foreach($migSelectT4 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
               </select>
			</div>

			<div class="col-md-3">
				<label for="cedula">CÉDULA DE IDENTIDAD</label>
				 <input type="text" class="form-control" name="cedula" id="cedula" value="{{$form_t4->cedula}}" maxlength="8">
			</div>

			<div class="col-md-3">
				<label for="nomRes">NOMBRE DEL RESPONSABLE</label>
				 <input type="text" class="form-control" name="nomRes" id="nomRes" value="{{$form_t4->nomRes}}" maxlength="100">
			</div>
		</div>

		<div class="row separar40 ">
			  <div class="col-md-3">
				<label for="apeRes">APELLIDO DEL RESPONSABLE</label>
				 <input type="text" class="form-control" name="apeRes" id="apeRes" value="{{$form_t4->apeRes}}" maxlength="100">
			</div>
			
		      <div class="col-md-3">
				<label for="telfRes">TELÉFONO DEL RESPONSABLE</label>
				 <input type="text" class="form-control telefono" name="telfRes" id="telfRes" value="{{$form_t4->telfRes}}" maxlength="20">
			  </div>

			  <div class="col-md-3">
				<label for="cargoRes">CARGO DEL RESPONSABLE</label>
				 <input type="text" class="form-control" name="cargoRes" id="cargoRes" value="{{$form_t4->cargoRes}}" maxlength="200">
			  </div>

			  <div class="col-md-3">
				<label for="correRes">CORREO DEL RESPONSABLE</label>
				@if($form_t4->correRes == '0')
				 <input type="text" class="form-control" name="correRes" id="correRes" value="99" maxlength="200">
				@else
				 <input type="text" class="form-control" name="correRes" id="correRes" value="{{$form_t4->correRes}}" maxlength="200">
				@endif
			  </div>
		</div>

		<div class="row separar40 ">
			  <div class="col-md-3 form-group">
           	    <label for="depAdmRes">TIPO DE RESPONSABLE</label>
                 <select name="depAdmRes" id="depAdmRes" class="form-control">
                    <option value="{{$form_t4->selectt41->id}}">{{$form_t4->selectt41->opcion}}</option>
                  @foreach($migSelectT41 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
                 </select>
			  </div>
		</div>  
			

		<div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT4') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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