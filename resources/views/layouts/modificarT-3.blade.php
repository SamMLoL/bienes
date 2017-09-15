<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Anexo T3</title>
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
              <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T3</b></h5></div>
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
		
		<form role="form" method="POST" action="{{route('t3.update', $form_t3->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="codRegT3">CÓDIGO DE REGISTRO</label>
				 <input type="text" class="form-control" name="codRegT3" id="codRegT3" value="{{$form_t3->codRegT3}}" maxlength="10">
			</div>
			

			<div class="col-md-3 form-group">
           	   <label for="compAse">COMPAÑIA ASEGURADORA</label>
                 <select name="compAse" id="compAse" class="form-control">
                    <option value="{{$form_t3->selectt3->id}}">{{$form_t3->selectt3->opcion}}</option>
                  @foreach($migSelectT3 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
                 </select>
			</div>

			<div class="col-md-3">
				<label for="otraCom">OTRA COMPAÑÍA ASEGURADORA<</label>
				@if($form_t3->otraCom == '1')
				 <input type="text" class="form-control" name="otraCom" id="otraCom" value="noaplica" maxlength="100">
				@else
				 <input type="text" class="form-control" name="otraCom" id="otraCom" value="{{$form_t3->otraCom}}" maxlength="100">
				@endif
			</div>

			<div class="col-md-3">
				<label for="numPoli">NÚMERO DE PÓLIZA</label>
				@if($form_t3->numPoli == '0')
				 <input type="text" class="form-control" name="numPoli" id="numPoli" value="noaplica" maxlength="30">
				@else
				 <input type="text" class="form-control" name="numPoli" id="numPoli" value="{{$form_t3->numPoli}}" maxlength="30">
				@endif
			</div>
		</div>

		<div class="row separar40 ">
			<div class="col-md-3 form-group">
           	  <label for="tipPoli">TIPO DE PÓLIZA</label>
                 <select name="tipPoli" id="tipPoli" class="form-control">
                    <option value="{{$form_t3->selectt31->id}}">{{$form_t3->selectt31->opcion}}</option>
                  @foreach($migSelectT31 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
                 </select>
			</div>

			<div class="col-md-3">
				<label for="montoAse">MONTO ASEGURADO</label>
				 <input type="text" class="form-control money" name="montoAse" id="montoAse" value="{{$form_t3->montoAse}}" maxlength="26">
			</div>
			 
			<div class="col-md-3 form-group">
           	  <label for="moneda">MONEDA</label>
               <select name="moneda" id="moneda" class="form-control">
                    <option value="{{$form_t3->selectt32->id}}">{{$form_t3->selectt32->opcion}}</option>
                  @foreach($migSelectT32 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
               </select>
			</div>
			
		       <div class="col-md-3">
				<label for="espMone">ESPECIFIQUE LA MONEDA</label>
				@if($form_t3->espMone == '1')
				 <input type="text" class="form-control" name="espMone" id="espMone" value="noaplica" maxlength="30">
				@else
				 <input type="text" class="form-control" name="espMone" id="espMone" value="{{$form_t3->espMone}}" maxlength="30">
				@endif
			  </div>
		</div>
		    
			<div class="row separar40 ">
			  <div class="col-md-3">
				<label for="feiniPoli">FECHA INICIO DE PÓLIZA</label>
				@if($form_t3->feiniPoli == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feiniPoli" id="feiniPoli" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feiniPoli" id="feiniPoli" value="{{$form_t3->feiniPoli}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="fefinPoli">FECHA FINAL DE POLIZA</label>
				@if($form_t3->fefinPoli == '1111-11-11')
				 <input type="text" class="form-control calendario" name="fefinPoli" id="fefinPoli" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="fefinPoli" id="fefinPoli" value="{{$form_t3->fefinPoli}}">
				@endif
			  </div>
			</div>

		<div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT3') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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