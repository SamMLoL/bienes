<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Anexo T-2-4</title>
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
              <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T2-4</b></h5></div>
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
		
		<form role="form" method="POST" action="{{route('t24.update', $form_t24->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="codOt2_4">CÓDIGO DE ORIGEN</label>
				@if($form_t24->codOt2_4 == '0')
				 <input type="text" class="form-control" name="codOt2_4" id="codOt2_4" value="E-1">
				@else
				 <input type="text" class="form-control" name="codOt2_4" id="codOt2_4" value="{{$form_t24->codOt2_4}}">
				@endif
			</div>
			

			<div class="col-md-3 form-group">
           	  <label for="codAdq">CÓDIGO FORMA DE ADQUISICIÓN</label>
               <select name="codAdq" id="codAdq" class="form-control">
                    <option value="{{$form_t24->selectt24->id}}">{{$form_t24->selectt24->opcion}}</option>
                  @foreach($migselectT24 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
               </select>
			</div>

			<div class="col-md-3">
				<label for="nomDona">NOMBRE DEL DONANTE</label>
				@if($form_t24->nomDona == '1')
				 <input type="text" class="form-control" name="nomDona" id="nomDona" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomDona" id="nomDona" value="{{$form_t24->nomDona}}">
				@endif
			</div>

			<div class="col-md-3">
				<label for="nomBen">NOMBRE DEL BENEFICIARIO</label>
				@if($form_t24->nomBen == '1')
				 <input type="text" class="form-control" name="nomBen" id="nomBen" value="noaplica">
				@else
				 <input type="text" class="form-control" name="nomBen" id="nomBen" value="{{$form_t24->nomBen}}">
				@endif
			</div>
		</div>

		<div class="row separar40 ">

			
			<div class="col-md-3">
				<label for="numConac">NÚMERO DE CONTRATO O ACTA</label>
				@if($form_t24->numConac == '0')
				 <input type="text" class="form-control" name="numConac" id="numConac" value="XXX">
				@else
				 <input type="text" class="form-control" name="numConac" id="numConac" value="{{$form_t24->numConac}}">
				@endif
			  </div>
			 
			
		       <div class="col-md-3">
				<label for="nomRegn">NOMBRE REGISTRO O NOTARÍA</label>
				@if($form_t24->nomRegn == '1')
				 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="XXX">
				@else
				 <input type="text" class="form-control" name="nomRegn" id="nomRegn" value="{{$form_t24->nomRegn}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="tomo">TOMO</label>
				@if($form_t24->tomo == '1')
				 <input type="text" class="form-control" name="tomo" id="tomo" value="XXX">
				@else
				 <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t24->tomo}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="folio">FOLIO</label>
				@if($form_t24->folio == '0')
				 <input type="text" class="form-control" name="folio" id="folio" value="99">
				@else
				 <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t24->folio}}">
				@endif
			  </div>
			</div>
		    
			<div class="row separar40 ">
			   <div class="col-md-3">
				<label for="feConac">FECHA DEL CONTRATO O NOTARÍA</label>
				@if($form_t24->feConac == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feConac" id="feConac" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feConac" id="feConac" value="{{$form_t24->feConac}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="feReg">FECHA DE REGISTRO</label>
				@if($form_t24->feReg == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feReg" id="feReg" value="{{$form_t24->feReg}}">
				@endif
			  </div>
			</div>

		<div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT2-4') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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