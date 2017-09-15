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
              <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T2-1</b></h5></div>
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
		
		<form role="form" method="POST" action="{{route('t21.update', $form_t21->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="codOt2_1">CÓDIGO DE ORIGEN</label>
				@if($form_t21->codOt2_1 == '0')
				 <input type="text" class="form-control" name="codOt2_1" id="codOt2_1" value="B-1">
				@else
				 <input type="text" class="form-control" name="codOt2_1" id="codOt2_1" value="{{$form_t21->codOt2_1}}">
				@endif
			</div>
			

			<div class="col-md-3 form-group">
           	  <label for="codAdq">TIPO DE PROVEEDOR</label>
               <select name="codAdq" id="codAdq" class="form-control">
                    <option value="{{$form_t21->selectt21->id}}">{{$form_t21->selectt21->opcion}}</option>
                  @foreach($migselectT21 as $form)
                    <option value="{{$form->id}}">{{$form->opcion}}</option> 
                  @endforeach
               </select>
			</div>

			<div class="col-md-3">
				<label for="codPro">CÓDIGO PROVEEDOR</label>
				@if($form_t21->codPro == '0')
				 <input type="text" class="form-control" name="codPro" id="codPro" value="XXX">
				@else
				 <input type="text" class="form-control" name="codPro" id="codPro" value="{{$form_t21->codPro}}">
				@endif
			</div>
			
			<div class="col-md-3">
				<label for="numCom">N° ORDEN ORDEN DE COMPRA</label>
				@if($form_t21->numCom == '0')
				 <input type="text" class="form-control" name="numCom" id="numCom" value="XXX">
				@else
				 <input type="text" class="form-control" name="numCom" id="numCom" value="{{$form_t21->numCom}}">
				@endif
			</div>
		</div>

		<div class="row separar40 ">
			<div class="col-md-3">
				<label for="numNota">N° DE NOTA DE ENTREGA</label>
				@if($form_t21->numNota == '0')
				 <input type="text" class="form-control" name="numNota" id="numNota" value="XXX">
				@else
				 <input type="text" class="form-control" name="numNota" id="numNota" value="{{$form_t21->numNota}}">
				@endif
			  </div>
			  
			  <div class="col-md-3">
				<label for="numFac">N° DE LA NOTA FACTURA</label>
				@if($form_t21->numFac == '0')
				 <input type="text" class="form-control" name="numFac" id="numFac" value="XXX">
				@else
				 <input type="text" class="form-control" name="numFac" id="numFac" value="{{$form_t21->numFac}}">
				@endif
			  </div>

			
		       <div class="col-md-3">
				<label for="feCom">FECHA DE LA ORDEN DE COMPRA</label>
				@if($form_t21->feCom == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feCom" id="feCom" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feCom" id="feCom" value="{{$form_t21->feCom}}">
				@endif
			  </div>

			  <div class="col-md-3">
				<label for="feNota">FECHA DE LA NOTA DE ENTREGA</label>
				@if($form_t21->feNota == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feNota" id="feNota" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feNota" id="feNota" value="{{$form_t21->feNota}}">
				@endif
			  </div>
			</div>
		    
			<div class="row separar40 ">
			  <div class="col-md-3">
				<label for="feFac">FECHA DE LA NOTA DE ENTREGA</label>
				@if($form_t21->feFac == '1111-11-11')
				 <input type="text" class="form-control calendario" name="feFac" id="feFac" value="11111111">
				@else
				 <input type="text" class="form-control calendario" name="feFac" id="feFac" value="{{$form_t21->feFac}}">
				@endif
			  </div>
		</div>

		<div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT2-1') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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