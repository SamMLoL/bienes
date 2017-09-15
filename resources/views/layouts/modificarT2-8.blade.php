<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Anexo T2-8</title>
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
              <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T2-8</b></h5></div>
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
		
		<form role="form" method="POST" action="{{route('t28.update', $form_t28->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="codOt2_8">CÓDIGO DE ORIGEN</label>
				@if($form_t28->codOt2_8 == '0')
				 <input type="text" class="form-control" name="codOt2_8" id="codOt2_8" value="I-1">
				@else
				 <input type="text" class="form-control" name="codOt2_8" id="codOt2_8" value="{{$form_t28->codOt2_8}}">
				@endif
			</div>

			<div class="col-md-3 form-group">
           	  <label for="codAdq">CÓDIGO FORMA DE ADQUISICIÓN</label>
               <select name="codAdq" id="codAdq" class="form-control">
                    <option value="{{$form_t28->selectt28->id}}">{{$form_t28->selectt28->opcion}}</option>
                  @foreach($migSelectT28 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
               </select>
			</div>

			<div class="col-md-3">
				<label for="nomProan">NOMBRE PROPIETARIO ANTERIOR</label>
				@if($form_t28->nomProan == '1')
				 <input type="text" class="form-control" name="nomProan" id="nomProan" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomProan" id="nomProan" value="{{$form_t28->nomProan}}">
				@endif
			</div>

			<div class="col-md-3">
				<label for="nomBen">NOMBRE DEL BENEFICIARIO</label>
				@if($form_t28->nomBen == '1')
				 <input type="text" class="form-control" name="nomBen" id="nomBen" value="noaplica">
				@else
				 <input type="text" class="form-control" name="nomBen" id="nomBen" value="{{$form_t28->nomBen}}">
				@endif
			</div>
		</div>

		<div class="row separar40 ">
			  <div class="col-md-3">
				<label for="nomAuto">N° DE LA AUTORIZACIÓN</label>
				@if($form_t28->nomAuto == '1')
				 <input type="text" class="form-control" name="nomAuto" id="nomAuto" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomAuto" id="nomAuto" value="{{$form_t28->nomAuto}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="nomRegn">NÚMERO DE SENTECIA O ACTO</label>
				@if($form_t28->numSeAdm == '0')
				 <input type="text" class="form-control" name="numSeAdm" id="numSeAdm" value="XXX">
				@else
				 <input type="text" class="form-control" name="numSeAdm" id="numSeAdm" value="{{$form_t28->numSeAdm}}">
				@endif
			  </div>

		      <div class="col-md-3">
				<label for="nomRegn">NOMBRE REGISTRO O NOTARÍA</label>
				@if($form_t28->nomRegn == '1')
				 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="{{$form_t28->nomRegn}}">
				@endif
			  </div>	

			  <div class="col-md-3">
				<label for="tomo">TOMO</label>
				@if($form_t28->tomo == '1')
				 <input type="text" class="form-control" name="tomo" id="tomo" value="XXX">
				@else
				 <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t28->tomo}}">
				@endif
			  </div>
		</div>
		    
		<div class="row separar40 ">
			  <div class="col-md-3">
				<label for="folio">FOLIO</label>
				@if($form_t28->folio == '0')
				 <input type="text" class="form-control" name="folio" id="folio" value="99">
				@else
				 <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t28->folio}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="feSeAdm">FECHA DE AUTORIZACIÓN</label>
				@if($form_t28->feSeAdm == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feSeAdm" id="feSeAdm" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feSeAdm" id="feSeAdm" value="{{$form_t28->feSeAdm}}">
				@endif
			  </div>
			  
			  <div class="col-md-3">
				  <label for="feReg">FECHA DE REGISTRO</label>
				@if($form_t28->feReg == '1111-11-11')
				  <input type="text" class="form-control calendario" name="feReg" id="feReg" value="11111111">
				@else
				  <input type="text" class="form-control calendario" name="feReg" id="feReg" value="{{$form_t28->feReg}}">
				@endif
			  </div>
		 </div>

			
		<div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT2-8') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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