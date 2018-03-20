<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-9">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Bienes</title>
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
                   <div class="panel-heading text-center"><h5><b>MODIFICAR EQUIPO DE TRANSPORTE <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
			    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
				    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t9->id}}</b></h4>
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
			
		<form role="form" method="POST" action="{{route('transporte.update', $form_t9->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codBien">Código de Origen del Bien </label>
						 <input type="text" class="form-control" name="codBien" id="codBien" value="{{$form_t9->codBien}}" maxlength="12">
					</div>
					
					<div class="col-md-4">
						<label for="codCata">Código según el catalogo</label>
							@if($form_t9->codCata == '1')
							 <input type="text" class="form-control" name="codCata" id="codCata" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codCata" id="codCata" value="{{$form_t9->codCata}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4 form-group">
				        <li>Dependencia Administrativa:</li>
					        <select name="depAdmRes" id="depAdmRes" class="form-control">
					            <option value="{{$form_t9->selectDependenciatr->id}}" >{{$form_t9->selectDependenciatr->opcion}}</option>
					              @foreach($dependecia as $traeDir)
					              	@if($traeDir->id != $form_t9->selectDependenciatr->id)
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
							@if($form_t9->sedeOrgano == '1')
							 <input type="text" class="form-control" name="sedeOrgano" id="sedeOrgano" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="sedeOrgano" id="sedeOrgano" value="{{$form_t9->sedeOrgano}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
						<li for="codRespAdm">Código del Responsable Administrativo</li>
							@if($form_t9->codRespAdm == '1')
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="{{$form_t9->codRespAdm}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
						<li for="codRespAdm">Código del Responsable del uso Directo del Bien</li>
							@if($form_t9->codResBien == '1')
							 <input type="text" class="form-control" name="codResBien" id="codResBien" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codResBien" id="codResBien" value="{{$form_t9->codResBien}}" maxlength="10">
							@endif
					</div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="codRespAdm">Código interno del Bien</li>
							@if($form_t9->codInterno == '1')
							 <input type="text" class="form-control" name="codInterno" id="codInterno" value="xxx" maxlength="20">
							@else
							 <input type="text" class="form-control" name="codInterno" id="codInterno" value="{{$form_t9->codInterno}}" maxlength="20">
							@endif
					</div>

					<div class="col-md-4 form-group">
					    <li>Estatus del uso del Bien</li>
					        <select name="estatuBien" id="estatuBien" class="form-control">
					            <option value="{{$form_t9->selectEstatustr->id}}">{{$form_t9->selectEstatustr->opcion}}</option>
					              @foreach($estatusBien as $traeDir)
					              	@if($traeDir->id != $form_t9->selectEstatustr->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
					                @endif
					              @endforeach
					        </select>
    				</div>
					
					<div class="col-md-4 form-group">
	    				<li for="espOtroUso">Especifique el Otro Uso</li>
	                      @if($form_t9->espOtroUso == '1')
	                        <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="noaplica" maxlength="100" disabled>
	                    
	                      @else
	                        <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="{{$form_t9->espOtroUso}}" maxlength="100" >
	                      @endif
                    </div>
				</div>
			</div>
<hr>
<hr>
			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="valorAdq">Valor de Adquisición</li>
						@if($form_t9->valorAdq == '0')
							 <input type="text" class="form-control money" name="valorAdq" id="valorAdq" value="99.99" maxlength="26">
					    @else
					    	 <input type="text" class="form-control money" name="valorAdq" id="valorAdq" value="{{$form_t9->valorAdq}}" maxlength="26">
					    @endif
					    
					</div>

					<div class="col-md-4 form-group">
		                <li><b>Moneda</b></li>
		                  <select name="moneda" id="moneda" class="form-control">
		                    <option value="{{$form_t9->selectSegurostr->id}}">{{$form_t9->selectSegurostr->opcion}}</option>
		                      @foreach($moneda as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectSegurostr->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>
					
					<div class="col-md-4">
						<li for="codRespAdm">Especifique la Otra Moneda</li>
						   @if($form_t9->espeMoneda == '1')
							 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="noaplica" maxlength="30" disabled>
						   @else
							 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="{{$form_t9->espeMoneda}}" maxlength="30">
						   @endif
					</div>
			 	</div>
			</div>
			
			<div class="row col-md-offset-1 separar">
				<div class="col-md-12">
					<div class="col-md-5">
	                    <li>Fecha de Adquisición del Bien</li>
	                      @if($form_t9->feAdqBien == '1111-11-11')
	                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="11111111" maxlength="10">
	                       
	                      @else
	                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="{{$form_t9->feAdqBien}}" maxlength="10">
	                      @endif
                    </div>

                    <div class="col-md-5">
	                    <li>Fecha de Ingreso del Bien en el Ente</li>
	                      @if($form_t9->feIngBien == '1111-11-11')
	                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="11111111" maxlength="10">
	                       
	                      @else
	                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="{{$form_t9->feIngBien}}" maxlength="10">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-5 form-group">
		                <li><b>Estado del Bien</b></li>
		                  <select name="edoBien" id="edoBien" class="form-control">
		                    <option value="{{$form_t9->selectCondiciontr->id}}">{{$form_t9->selectCondiciontr->opcion}}</option>
		                      @foreach($condicion as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectCondiciontr->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-5">
	                    <li>Especifique el Otro Estado del Bien</li>
	                      @if($form_t9->espOtroEdo == '1')
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="noaplica" maxlength="30" disabled>
	                       
	                      @else
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="{{$form_t9->espOtroEdo}}" maxlength="30">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row col-md-offset-1">
				<div class="col-md-12">
                    <div class="col-md-10 form-estilo">
						<li>Descripción del Estado del Bien:</li>
	                      @if($form_t9->descEdoBien == '1')
		                 	<textarea name="descEdoBien" id="descEdoBien" value="xxx" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                       
	                      @else
		                   <textarea name="descEdoBien" id="descEdoBien" class="form-control" maxlength="255" rows="4">{{$form_t9->descEdoBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                      @endif
                    </div>
				</div>
			</div>
<hr>
<hr>
			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-5">
	                    <li>Clase del Bien</li>
		                  <select name="claseBien" id="claseBien" class="form-control">
		                    <option value="{{$form_t9->selectClasebien->id}}">{{$form_t9->selectClasebien->opcion}}</option>
		                      @foreach($claseBien as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectClasebien->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
            		</div>

            		<div class="col-md-5 form-group">
	    				<li for="espeClase">Especifique la Otra Clase</li>
	                      @if($form_t9->espeClase == '1')
	                        <input type="text" class="form-control" name="espeClase" id="espeClase" value="noaplica" maxlength="100" disabled>
	                      @else
	                        <input type="text" class="form-control" name="espeClase" id="espeClase" value="{{$form_t9->espeClase}}" maxlength="100" >
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4 form-group">
                		<li><b>Código de la Marca del Bien:</b></li>
		                  <select name="codMarca" id="codMarca2" class="form-control">
		                    <option value="{{$form_t9->selectMarcatrans->id}}">{{$form_t9->selectMarcatrans->codMarca}}</option>
		                      @foreach($marcas as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectMarcatrans->id)
		                    <option value="{{$traeDir->id}}">{{$traeDir->codMarca}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
            		</div>

            		<div class="col-md-4 form-group">
             	 		<li><b>Código Modelo del Bien:</b></li>
               		 		<select name="codModel" id="codModel2" class="form-control">
			                    <option value="{{$form_t9->selectModeltrans->id}}" >{{$form_t9->selectModeltrans->codModel}}</option>
			                      @foreach($modelos as $traeDir)
			                      	@if($traeDir->id != $form_t9->selectModeltrans->id)
			                    <option value="{{$traeDir->id}}">{{$traeDir->codModel}}</option> 
			                    	@endif
			                      @endforeach
               				</select>
            		</div>

            		<div class="col-md-4">
            			<li for="espeClase">Año de Fabricación del Bien</li>
	                    @if($form_t9->anoFabriBien == '0')
	                        <input type="text" class="form-control" name="anoFabriBien" id="anoFabriBien" value="xxx" maxlength="4">
	                      @else
	                        <input type="text" class="form-control" name="anoFabriBien" id="anoFabriBien" value="{{$form_t9->anoFabriBien}}" maxlength="4" >
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4 form-group">
	    				<li for="espeClase">Serial de Carrocería del Bien</li>
	                      @if($form_t9->serialCarro == '1')
	                        <input type="text" class="form-control" name="serialCarro" id="serialCarro" value="noaplica" maxlength="100">
	                      @else
	                        <input type="text" class="form-control" name="serialCarro" id="serialCarro" value="{{$form_t9->serialCarro}}" maxlength="100" >
	                      @endif
                    </div>

                    <div class="col-md-4 form-group">
	    				<li for="espeClase">Serial del Motor del Bien</li>
	                      @if($form_t9->serialMotor == '1')
	                        <input type="text" class="form-control" name="serialMotor" id="serialMotor" value="noaplica" maxlength="100">
	                    
	                      @else
	                        <input type="text" class="form-control" name="serialMotor" id="serialMotor" value="{{$form_t9->serialMotor}}" maxlength="100" >
	                      @endif
                    </div>	

                    <div class="col-md-4 form-group">
	    				<li for="espeClase">Placas / Siglas del Bien</li>
	                      @if($form_t9->placaBien == '1')
	                        <input type="text" class="form-control" name="placaBien" id="placaBien" value="noaplica" maxlength="100">
	                    
	                      @else
	                        <input type="text" class="form-control" name="placaBien" id="placaBien" value="{{$form_t9->placaBien}}" maxlength="100" >
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
	                    <li>Número del Título de Propiedad</li>
	                      @if($form_t9->numTituPro == '1')
	                           <input type="text" class="form-control" name="numTituPro" id="numTituPro" value="xxx" maxlength="30">
	                       
	                      @else
	                           <input type="text" class="form-control" name="numTituPro" id="numTituPro" value="{{$form_t9->numTituPro}}" maxlength="30">
	                      @endif
                    </div>

					<div class="col-md-4 form-group">
		                <li><b>Color del Bien</b></li>
		                  <select name="codColorBien" id="codColorBien" class="form-control">
		                    <option value="{{$form_t9->selectColorbientr->id}}">{{$form_t9->selectColorbientr->opcion}}</option>
		                      @foreach($colorBien as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectColorbientr->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
	                    <li>Especificación del Otro Color</li>
	                      @if($form_t9->espeColor == '1')
	                           <input type="text" class="form-control" name="espeColor" id="espeColor" value="noaplica" maxlength="50" disabled>
	                       
	                      @else
	                           <input type="text" class="form-control" name="espeColor" id="espeColor" value="{{$form_t9->espeColor}}" maxlength="50">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-10 form-estilo">
						<li>Otras Especificación de Color:</li>
	                      @if($form_t9->otraEspeColor == '1')
	                        
		                  	 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
	                       
	                      @else
	                        
		                  	 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4">{{$form_t9->otraEspeColor}}</textarea>
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
	                    <li>Capacidad del Bien</li>
	                      @if($form_t9->capacidadBien == '1')
	                           <input type="text" class="form-control" name="capacidadBien" id="capacidadBien" value="xxx" maxlength="50">
	                       
	                      @else
	                           <input type="text" class="form-control" name="capacidadBien" id="capacidadBien" value="{{$form_t9->capacidadBien}}" maxlength="50">
	                      @endif
                    </div>

                    <div class="col-md-4">
	                    <li>Nombre dado al Bien</li>
	                      @if($form_t9->nomDadoBien == '1')
	                           <input type="text" class="form-control" name="nomDadoBien" id="nomDadoBien" value="xxx" maxlength="100">
	                       
	                      @else
	                           <input type="text" class="form-control" name="nomDadoBien" id="nomDadoBien" value="{{$form_t9->nomDadoBien}}" maxlength="100">
	                      @endif
                    </div>

                    <div class="col-md-4">
	                    <li>Uso del Bien</li>
	                      @if($form_t9->usoBien == '1')
	                           <input type="text" class="form-control" name="usoBien" id="usoBien" value="xxx" maxlength="100">
	                       
	                      @else
	                           <input type="text" class="form-control" name="usoBien" id="usoBien" value="{{$form_t9->usoBien}}" maxlength="100">
	                      @endif
                    </div>
				</div>
			</div>
			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-6 form-estilo">
	                    <li>Especificaciones Técnicas del Bien</li>
	                      @if($form_t9->espeTecBien == '1')

	                      <textarea name="espeTecBien" id="espeTecBien" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi1">0/255</div> </div>

	                      @else
	                      <textarea name="espeTecBien" id="espeTecBien" class="form-control" maxlength="255" rows="4">{{$form_t9->espeTecBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi1">0/255</div> </div>
	                      @endif
                    </div>

                    <div class="col-md-6 form-estilo">
	                    <li>Otras Especificaciones de Descripción del Bien</li>
	                      @if($form_t9->otraEspeBien == '1')
	                      <textarea name="otraEspeBien" id="otraEspeBien" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi2">0/255</div> </div>
	                       
	                      @else
	                      <textarea name="otraEspeBien" id="otraEspeBien" class="form-control" maxlength="255" rows="4">{{$form_t9->otraEspeBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi2">0/255</div> </div>
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
	                    <li>Garantía</li>
	                      @if($form_t9->garantia == '1')
	                           <input type="text" class="form-control" name="garantia" id="garantia" value="99" maxlength="5">
	                       
	                      @else
	                           <input type="text" class="form-control" name="garantia" id="garantia" value="{{$form_t9->garantia}}" maxlength="5">
	                      @endif
                    </div>

                    <div class="col-md-4 form-group">
		                <li><b>Unidad de Medida de la Garantía</b></li>
		                  <select name="unidadMedi" id="unidadMedi" class="form-control">
		                    <option value="{{$form_t9->selectUnidadtr->id}}">{{$form_t9->selectUnidadtr->opcion}}</option>
		                      @foreach($unidadGarantia as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectUnidadtr->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
		                    <li>Fecha Inicio de la garantía</li>
		                      @if($form_t9->feIniGarantia == '1111-11-11')
		                           <input type="text" class="form-control calendario" name="feIniGarantia" id="feIniGarantia" value="11111111" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control calendario" name="feIniGarantia" id="feIniGarantia" value="{{$form_t9->feIniGarantia}}" maxlength="10">
		                      @endif
	                </div>
				</div>
			</div>
<hr>
<hr>
			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
	                <div class="col-md-5">
		                    <li>Fecha Fin de la garantía</li>
		                      @if($form_t9->feFinGarantia == '1111-11-11')
		                           <input type="text" class="form-control calendario" name="feFinGarantia" id="feFinGarantia" value="11111111" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control calendario" name="feFinGarantia" id="feFinGarantia" value="{{$form_t9->feFinGarantia}}" maxlength="10">
		                      @endif
	                </div>

	                <div class="col-md-5 form-group">
		                <li><b>Tiene Sistema de Rastreo y Localización Instalado</b></li>
		                  <select name="tieneSistema" id="tieneSistema" class="form-control">
		                    <option value="{{$form_t9->selectComponentetr->id}}">{{$form_t9->selectComponentetr->opcion}}</option>
		                      @foreach($poseeComponente as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectComponentetr->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>
	     		</div>
			</div>
				
			<div class="row col-md-offset-1 separar">
				<div class="col-md-12">
					<div class="col-md-10 form-estilo">
		                <li>Especificaciones Sistema de Rastreo Instalado</li>
  	                      @if($form_t9->espeSistema == '1')
	                      <textarea name="espeSistema" id="espeSistema" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi3">0/255</div> </div>
	                       
	                      @else
	                      <textarea name="espeSistema" id="espeSistema" class="form-control" maxlength="255" rows="4">{{$form_t9->espeSistema}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contodi3">0/255</div> </div>
	                      @endif
	                </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4 form-group">
		                <li><b>Posee Componentes</b></li>
		                  <select name="poseeCompo" id="poseeCompo" class="form-control">
		                    <option value="{{$form_t9->selectComponentetr->id}}">{{$form_t9->selectComponentetr->opcion}}</option>
		                      @foreach($poseeComponente as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectComponentetr->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4 form-group">
		                <li><b>Se encuentra asegurado el Bien</b></li>
		                  <select name="seguroBien" id="seguroBien" class="form-control">
		                    <option value="{{$form_t9->selectComponentetr->id}}">{{$form_t9->selectComponentetr->opcion}}</option>
		                      @foreach($poseeComponente as $traeDir)
		                      	@if($traeDir->id != $form_t9->selectComponentetr->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                      	@endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
		                    <li>Código del Registro de Seguro</li>
		                      @if($form_t9->codRegSeguro == '1')
		                           <input type="text" class="form-control" name="codRegSeguro" id="codRegSeguro" value="99" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control" name="codRegSeguro" id="codRegSeguro" value="{{$form_t9->codRegSeguro}}" maxlength="10">
		                      @endif
	                </div>
				</div>
			</div>
			
			<input type="hidden" id="rut" value="{{url('dropdown2')}}">

			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                 <a href="{{ url('/regTransporte') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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
 	<script src="{{ asset('js/inputDinamicoanexosT.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
 	<script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
 	<script src="{{ asset('js/contadorTextarea.js') }}"></script>

 
