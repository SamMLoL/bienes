<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Semovientes</title>
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
                   <div class="panel-heading text-center"><h5><b>MODIFICAR SEMOVIENTES <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
			    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
				    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t10->id}}</b></h4>
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
			
		<form role="form" method="POST" action="{{route('semovientes.update', $form_t10->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}


			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codBien">Código de Origen del Bien</label>
						 <input type="text" class="form-control" name="codBien" id="codBien" value="{{$form_t10->codBien}}" maxlength="12">
					</div>
					
					<div class="col-md-4">
						<label for="codCata">Código según el catalogo</label>
							@if($form_t10->codCata == '1')
							 <input type="text" class="form-control" name="codCata" id="codCata" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codCata" id="codCata" value="{{$form_t10->codCata}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4 form-group">
				        <li>Dependencia Administrativa:</li>
					        <select name="depAdmRes" id="depAdmRes" class="form-control">
					            <option value="{{$form_t10->selectDependenciasemo->id}}" >{{$form_t10->selectDependenciasemo->opcion}}</option>
					              @foreach($dependecia as $traeDir)
					              	@if($traeDir->id != $form_t10->selectDependenciasemo->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option>
					                @endif
					              @endforeach
					        </select>
				      </div>
				 </div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="sedeOrgano">Sede del Órgano o Ente Donde se Encuentra el Bien</li>
							@if($form_t10->sedeOrgano == '1')
							 <input type="text" class="form-control" name="sedeOrgano" id="sedeOrgano" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="sedeOrgano" id="sedeOrgano" value="{{$form_t10->sedeOrgano}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
						<li for="codRespAdm">Código del Responsable Administrativo</li>
							@if($form_t10->codRespAdm == '1')
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="{{$form_t10->codRespAdm}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
						<li for="codResBien">Código del Responsable del uso directo del Bien</li>
							@if($form_t10->codResBien == '1')
							 <input type="text" class="form-control" name="codResBien" id="codResBien" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codResBien" id="codResBien" value="{{$form_t10->codResBien}}" maxlength="10">
							@endif
					</div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="codInterno">Código interno del Bien</li>
							@if($form_t10->codInterno == '1')
							 <input type="text" class="form-control" name="codInterno" id="codInterno" value="xxx" maxlength="20">
							@else
							 <input type="text" class="form-control" name="codInterno" id="codInterno" value="{{$form_t10->codInterno}}" maxlength="20">
							@endif
					</div>

					<div class="col-md-4 form-group">
					    <li>Estatus del uso del Bien</li>
					        <select name="estatuBien" id="estatuBien" class="form-control">
					            <option value="{{$form_t10->selectEstatusemo->id}}">{{$form_t10->selectEstatusemo->opcion}}</option>
					              @foreach($estatusBien as $traeDir)
					              	@if($traeDir->id != $form_t10->selectEstatusemo->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
					                @endif
					              @endforeach
					        </select>
    				</div>
					
					<div class="col-md-4 form-group">
	    				<li for="espOtroUso">Especifique el otro uso</li>
	                      @if($form_t10->espOtroUso == '1')
	                        <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="noaplica" maxlength="100">
	                    
	                      @else
	                        <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="{{$form_t10->espOtroUso}}" maxlength="100" >
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="valorAdq">Valor de Adquisición</li>
							 <input type="text" class="form-control money" name="valorAdq" id="valorAdq" value="{{$form_t10->valorAdq}}" maxlength="26">
					</div>

					<div class="col-md-4 form-group">
		                <li><b>Moneda</b></li>
		                  <select name="moneda" id="moneda" class="form-control">
		                    <option value="{{$form_t10->selectSegurosemo->id}}">{{$form_t10->selectSegurosemo->opcion}}</option>
		                      @foreach($moneda as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectSegurosemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>
					
					<div class="col-md-4">
						<li for="codRespAdm">Especifique la Otra Moneda</li>
						   @if($form_t10->espeMoneda == '1')
							 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="noaplica" maxlength="30">
						   @else
							 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="{{$form_t10->espeMoneda}}" maxlength="30">
						   @endif
					</div>
			 	</div>
			</div>
<hr>
<hr>
			<div class="row col-md-offset-1 separar">
				<div class="col-md-12">
					<div class="col-md-5">
	                    <li>Fecha de Adquisición del Bien</li>
	                      @if($form_t10->feAdqBien == '1111-11-11')
	                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="11111111" maxlength="10">
	                       
	                      @else
	                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="{{$form_t10->feAdqBien}}" maxlength="10">
	                      @endif
                    </div>

                    <div class="col-md-5">
	                    <li>Fecha de Ingreso del Bien en el Ente</li>
	                      @if($form_t10->feIngBien == '1111-11-11')
	                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="11111111" maxlength="10">
	                       
	                      @else
	                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="{{$form_t10->feIngBien}}" maxlength="10">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-5 form-group">
		                <li><b>Estado del Bien</b></li>
		                  <select name="edoBien" id="edoBien" class="form-control">
		                    <option value="{{$form_t10->selectCondicionsemo->id}}">{{$form_t10->selectCondicionsemo->opcion}}</option>
		                      @foreach($condicion as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectCondicionsemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-5">
	                    <li>Especifique el Otro Estado del Bien</li>
	                      @if($form_t10->espOtroEdo == '1')
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="noaplica" maxlength="30">
	                       
	                      @else
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="{{$form_t10->espOtroEdo}}" maxlength="30">
	                      @endif
                    </div>
				</div>
			</div>

			
			<div class="row col-md-offset-1">
				<div class="col-md-12">
                    <div class="col-md-10 form-estilo">
						<li>Descripción del Estado del Bien:</li>
	                      @if($form_t10->descEdoBien == '1')
	                       
		                 	<textarea name="descEdoBien" id="descEdoBien" value="xxx" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                       
	                      @else
	                
		                   <textarea name="descEdoBien" id="descEdoBien" value="{{$form_t10->descEdoBien}}" class="form-control" maxlength="255" rows="4">{{$form_t10->descEdoBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                           
	                      @endif
                    </div>
				</div>
			</div>
<hr>
<hr>
			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-5 form-group">
             	 		<li><b>Raza:</b></li>
               		 	  @if($form_t10->raza == '1')
	                           <input type="text" class="form-control" name="raza" id="raza" value="xxx" maxlength="50">
	                       
	                      @else
	                           <input type="text" class="form-control" name="raza" id="raza" value="{{$form_t10->raza}}" maxlength="50">
	                      @endif	
            		</div>
                	
		            <div class="col-md-5 form-group">
		                <li><b>Genero:</b></li>
				        <select name="genero" id="genero" class="form-control">
				           <option value="{{$form_t10->selectGenerosemo->id}}">{{$form_t10->selectGenerosemo->opcion}}</option>
		                      @foreach($genero as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectGenerosemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
				        </select>
            		</div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-5 form-group">
             	 		<li><b>Tipo de Animal:</b></li>
               		 	<select name="tipoAnimal" id="tipoAnimal" class="form-control">
		                    <option value="{{$form_t10->selectAnimalsemo->id}}">{{$form_t10->selectAnimalsemo->opcion}}</option>
		                      @foreach($tiposAnimal as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectAnimalsemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                </select>
            		</div>
                	
		            <div class="col-md-5">
	                    <li>Especifique el Otro Tipo</li>
	                      @if($form_t10->espeOtroTipo == '1')
	                           <input type="text" class="form-control" name="espeOtroTipo" id="espeOtroTipo" value="noaplica" maxlength="100">
	                       
	                      @else
	                           <input type="text" class="form-control" name="espeOtroTipo" id="espeOtroTipo" value="{{$form_t10->espeOtroTipo}}" maxlength="100">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-5 form-group">
             	 		<li><b>Propósito:</b></li>
               		 	<select name="proposito" id="proposito" class="form-control">
		                    <option value="{{$form_t10->selectPropositosemo->id}}">{{$form_t10->selectPropositosemo->opcion}}</option>
		                      @foreach($proposito as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectPropositosemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                </select>	
            		</div>
                	
		            <div class="col-md-5">
	                    <li>Especifique el Otro Propósito</li>
	                      @if($form_t10->espeOtroPro == '1')
	                           <input type="text" class="form-control" name="espeOtroPro" id="espeOtroPro" value="noaplica" maxlength="100">
	                       
	                      @else
	                           <input type="text" class="form-control" name="espeOtroPro" id="espeOtroPro" value="{{$form_t10->espeOtroPro}}" maxlength="100">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row col-md-offset-1 separar">
				<div class="col-md-12">
					<div class="col-md-5 form-group">
		                <li><b>Código del Color del Bien</b></li>
		                  <select name="codColorBien" id="codColorBien" class="form-control">
		                    <option value="{{$form_t10->selectColorbiensemo->id}}">{{$form_t10->selectColorbiensemo->opcion}}</option>
		                      @foreach($colorBien as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectColorbiensemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-5">
	                    <li>Especificación del Otro Color</li>
	                      @if($form_t10->espeColor == '1')
	                           <input type="text" class="form-control" name="espeColor" id="espeColor" value="noaplica" maxlength="50">
	                       
	                      @else
	                           <input type="text" class="form-control" name="espeColor" id="espeColor" value="{{$form_t10->espeColor}}" maxlength="50">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-10 form-estilo">
						<li>Otras Especificaciones del Color:</li>
	                      @if($form_t10->otraEspeColor == '1')
	                        
		                  	 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
	                       
	                      @else
	                        
		                  	 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4">{{$form_t10->otraEspeColor}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
	                      @endif
                    </div>
                </div>
			</div>
<hr>
<hr>
			<div class="row separar">
				<div class="col-md-12">
	                <div class="col-md-4">
               		   <li>Peso:</li>
                 		<input type="text" id="peso" name="peso" value="{{$form_t10->peso}}" class="form-control money" placeholder="Introduzca el peso del animal" maxlength="18">
            		</div>
					
					<div class="col-md-4 form-group">
		                <li><b>Unidad de Medida del Peso</b></li>
		                  <select name="unidadPeso" id="unidadPeso" class="form-control">
		                    <option value="{{$form_t10->selectPesosemo->id}}">{{$form_t10->selectPesosemo->opcion}}</option>
		                      @foreach($peso as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectPesosemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
		                <li>Fecha de Nacimiento</li>
		                  @if($form_t10->feNacimiento == '1111-11-11')
		                    <input type="text" class="form-control calendario" name="feNacimiento" id="feNacimiento" value="11111111" maxlength="10">
		                       
		                  @else
		                    <input type="text" class="form-control calendario" name="feNacimiento" id="feNacimiento" value="{{$form_t10->feNacimiento}}" maxlength="10">
		                  @endif
	                </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-6 form-estilo">
                		<li>Señas Particular:</li>
                		@if($form_t10->seParticulares == '1')
                 			<textarea name="seParticulares" id="seParticulares" class="form-control" value="xxx" maxlength="255" rows="4">xxx</textarea>
                  		<div id="negro" for="contador">Caracteres: <div class="rojo" id="conSemo">0/255</div> </div>
                  		@else
                  		    <textarea name="seParticulares" id="seParticulares" class="form-control" value="xxx" maxlength="255" rows="4">{{$form_t10->seParticulares}}</textarea>
                  		<div id="negro" for="contador">Caracteres: <div class="rojo" id="conSemo">0/255</div> </div>
                  		@endif
            		</div>

            		<div class="col-md-6 form-estilo">
                		<li>Otras Especificaciones:</li>
                		@if($form_t10->otrasEspecifi == '1')
                 			<textarea name="otrasEspecifies" id="otrasEspecifies" class="form-control" value="xxx" maxlength="255" rows="4">xxx</textarea>
                  		<div id="negro" for="contador">Caracteres: <div class="rojo" id="conSemo">0/255</div> </div>
                  		@else
                  		    <textarea name="otrasEspecifies" id="otrasEspecifies" class="form-control" value="xxx" maxlength="255" rows="4">{{$form_t10->otrasEspecifi}}</textarea>
                  		<div id="negro" for="contador">Caracteres: <div class="rojo" id="conSemo">0/255</div> </div>
                  		@endif
            		</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
	                    <li>Número de Hierro</li>
	                      @if($form_t10->numHierro == '1')
	                           <input type="text" class="form-control" name="numHierro" id="numHierro" value="xxx" maxlength="15">
	                       
	                      @else
	                           <input type="text" class="form-control" name="numHierro" id="numHierro" value="{{$form_t10->numHierro}}" maxlength="15">
	                      @endif
                    </div>

                    <div class="col-md-4 form-group">
		                <li><b>Se encuentra asegurado el bien</b></li>
		                  <select name="seguroBien" id="seguroBien" class="form-control">
		                    <option value="{{$form_t10->selectSegurobiensemo->id}}">{{$form_t10->selectSegurobiensemo->opcion}}</option>
		                      @foreach($seguroBien as $traeDir)
		                      	@if($traeDir->id != $form_t10->selectSegurobiensemo->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
		                    <li>Código del Registro de Seguro</li>
		                  @if($form_t10->codRegSeguro == '1')
		                    <input type="text" class="form-control" name="codRegSeguro" id="codRegSeguro" value="99" maxlength="10">
		                       
		                  @else
		                    <input type="text" class="form-control calendario" name="codRegSeguro" id="codRegSeguro" value="{{$form_t10->codRegSeguro}}" maxlength="10">
		                  @endif
	                </div>
				</div>
			</div>sdadas
	
			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                 <a href="{{ url('/regSemovientes') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/inputDinamicobienes.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
 	<script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
 	<script src="{{ asset('js/contadorTextarea.js') }}"></script>

 
