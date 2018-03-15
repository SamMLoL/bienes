<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
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
                   <div class="panel-heading text-center"><h5><b>MODIFICAR DATOS DE LOS BIENES INMUEBLES DEL ÓRGANO O ENTE <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
			    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
				    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t12->id}}</b></h4>
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
			
		<form role="form" method="POST" action="{{route('bienes.update', $form_t12->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
						<label for="codBien">Código de Origen del Bien</label>
						 <input type="text" class="form-control" name="codBien" id="codBien" value="{{$form_t12->codBien}}" maxlength="12">
					</div>
					
					<div class="col-md-4">
						<label for="codCata">Código según el catalogo</label>
							@if($form_t12->codCata == '1')
							 <input type="text" class="form-control" name="codCata" id="codCata" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codCata" id="codCata" value="{{$form_t12->codCata}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
				        <li>Dependencia Administrativa</li>
					        <select name="depAdmRes" id="depAdmRes" class="form-control">
					            <option value="{{$form_t12->selectDepeninmueble->id}}" >{{$form_t12->selectDepeninmueble->opcion}}</option>
					              @foreach($dependencia as $traeDir)
					              	@if($traeDir->id != $form_t12->selectDepeninmueble->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option>
					                @endif
					              @endforeach
					        </select>
				     </div>
				 </div>
			</div>

			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
						<li for="codRespAdm">Código del Responsable Administrativo</li>
							@if($form_t12->codRespAdm == '1')
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="{{$form_t12->codRespAdm}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
				        <li>Bien Inmueble Corresponde a Alguna Sede del Ente</li>
					        <select name="corresBien" id="corresBien" class="form-control">
					            <option value="{{$form_t12->selectCorresinmu->id}}" >{{$form_t12->selectCorresinmu->opcion}}</option>
					              @foreach($corresBien as $traeDir)
					              	@if($traeDir->id != $form_t12->selectCorresinmu->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option>
					                @endif
					              @endforeach
					       </select>
				    </div>
					
					<div class="col-md-4">
						<li for="codSede">Código de Sede del Ente donde Corresponde el Bien</li>
							@if($form_t12->codSede == '1')
							 <input type="text" class="form-control" name="codSede" id="codSede" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codSede" id="codSede" value="{{$form_t12->codSede}}" maxlength="10">
							@endif
					</div> 
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
				        <li>Localización</li>
					        <select name="localizacion" id="localizacion" class="form-control">
					            <option value="{{$form_t12->selectLocalinmu->id}}" >{{$form_t12->selectLocalinmu->opcion}}</option>
					              @foreach($localizacion as $traeDir)
					              	@if($traeDir->id != $form_t12->selectLocalinmu->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option>
					                @endif
					              @endforeach
					       </select>
				    </div>

					<div class="col-md-4">
				        <li>Código del País donde se Ubica la Sede</li>
					        <select name="codPais" id="codPais" class="form-control">
					            <option value="{{$form_t12->selectPaisesinmu->id}}" >{{$form_t12->selectPaisesinmu->pais}}</option>
					              @foreach($selectPais as $traeDir)
					              	@if($traeDir->id != $form_t12->selectPaisesinmu->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->pais}}</option>
					                @endif
					              @endforeach
					       </select>
				    </div>

					<div class="col-md-4">
						<li for="espeOtroPais">Especifique el Otro País</li>
							@if($form_t12->espeOtroPais == '1')
							 <input type="text" class="form-control" name="espeOtroPais" id="espeOtroPais" value="noaplica" maxlength="100">
							@else
							 <input type="text" class="form-control" name="espeOtroPais" id="espeOtroPais" value="{{$form_t12->espeOtroPais}}" maxlength="100">
							@endif
					</div>					
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
				        <li>Código de la Parroquia donde se Ubica el Inmueble</li>
					        <select name="codParroquia" id="codParroquia" class="form-control">
					            <option value="{{$form_t12->selectParroinmu->id}}" >{{$form_t12->selectParroinmu->parroquia}}</option>
					              @foreach($selectPais as $traeDir)
					              	@if($traeDir->id != $form_t12->selectParroinmu->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->parroquia}}</option>
					                @endif
					              @endforeach
					       </select>
				    </div>

					<div class="col-md-4">
				        <li>Código de la Ciudad donde se Ubica el Bien</li>
					        <select name="codCiudad" id="codCiudad" class="form-control">
					            <option value="{{$form_t12->selectCiudadinmu->id}}" >{{$form_t12->selectCiudadinmu->ciudad}}</option>
					              @foreach($selectPais as $traeDir)
					              	@if($traeDir->id != $form_t12->selectCiudadinmu->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->ciudad}}</option>
					                @endif
					              @endforeach
					       </select>
				    </div>

					<div class="col-md-4">
						<li for="codRespAdm">Especifique la Otra Ciudad</li>
						   @if($form_t12->espeOtroCiudad == '1')
							 <input type="text" class="form-control" name="espeOtroCiudad" id="espeOtroCiudad" value="noaplica" maxlength="100">
						   @else
							 <input type="text" class="form-control" name="espeOtroCiudad" id="espeOtroCiudad" value="{{$form_t12->espeOtroCiudad}}" maxlength="100">
						   @endif
					</div>
			 	</div>
			</div>
<hr>
<hr>
			
			<div class="row separar">
				<div class="col-md-12 form-group">
	            	<div class="col-md-4">
	                    <li>Urbanización</li>
	                      @if($form_t12->urbanizacion == '1')
	                           <input type="text" class="form-control" name="urbanizacion" id="urbanizacion" value="xxx" maxlength="30">
	                       
	                      @else
	                           <input type="text" class="form-control" name="urbanizacion" id="urbanizacion" value="{{$form_t12->urbanizacion}}" maxlength="30">
	                      @endif
                    </div>

                    <div class="col-md-4">
	                    <li>Calle / Avenida</li>
	                      @if($form_t12->calleAvenida == '1')
	                           <input type="text" class="form-control" name="calleAvenida" id="calleAvenida" value="xxx" maxlength="50">
	                       
	                      @else
	                           <input type="text" class="form-control" name="calleAvenida" id="calleAvenida" value="{{$form_t12->calleAvenida}}" maxlength="50">
	                      @endif
                    </div>

                    <div class="col-md-4">
	                    <li>Casa / Edificio</li>
	                      @if($form_t12->casaEdificio == '1')
	                           <input type="text" class="form-control" name="casaEdificio" id="casaEdificio" value="xxx" maxlength="30">
	                       
	                      @else
	                           <input type="text" class="form-control" name="casaEdificio" id="casaEdificio" value="{{$form_t12->casaEdificio}}" maxlength="30">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
	                    <li>Código interno del Bien</li>
	                      @if($form_t12->codInterno == '1')
	                           <input type="text" class="form-control" name="codInterno" id="codInterno" value="xxx" maxlength="20">
	                       
	                      @else
	                           <input type="text" class="form-control" name="codInterno" id="codInterno" value="{{$form_t12->codInterno}}" maxlength="20">
	                      @endif
                    </div>

                    <div class="col-md-4">
				        <li>Estatus del uso del Bien</li>
					        <select name="estatuBien" id="estatuBien" class="form-control">
					            <option value="{{$form_t12->selectEstatuinmu->id}}" >{{$form_t12->selectEstatuinmu->opcion}}</option>
					              @foreach($estatusBien as $traeDir)
					              	@if($traeDir->id != $form_t12->selectEstatuinmu->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option>
					                @endif
					              @endforeach
					       </select>
				    </div>

				    <div class="col-md-4">
	                    <li>Especifique el Otro Uso</li>
	                      @if($form_t12->espOtroUso == '1')
	                           <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="noaplica" maxlength="100">
	                       
	                      @else
	                           <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="{{$form_t12->espOtroUso}}" maxlength="100">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
	                    <li>Valor de Adquisición del Bien</li>
	                      @if($form_t12->valorAdq == '0')
	                           <input type="text" class="form-control money" name="valorAdq" id="valorAdq" value="99" maxlength="26">
	                       
	                      @else
	                           <input type="text" class="form-control money" name="valorAdq" id="valorAdq" value="{{$form_t12->valorAdq}}" maxlength="26">
	                      @endif
                    </div>

                    <div class="col-md-4">
                		<li><b>Moneda:</b></li>
		                  <select name="moneda" id="moneda" class="form-control">
		                    <option value="{{$form_t12->selectMonedainmu->id}}">{{$form_t12->selectMonedainmu->opcion}}</option>
		                      @foreach($moneda as $traeDir)
		                      	@if($traeDir->id != $form_t12->selectMonedainmu->id)
		                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
            		</div>

            		<div class="col-md-4">
	                    <li>Especifique la Otra Moneda</li>
	                      @if($form_t12->espeMoneda == '1')
	                           <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="noaplica" maxlength="30">
	                       
	                      @else
	                           <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="{{$form_t12->espeMoneda}}" maxlength="30">
	                      @endif
                    </div>
				</div>
			</div>
<hr>
<hr>
			<div class="row separar col-md-offset-1">
				<div class="col-md-12 form-group">
					<div class="col-md-5">
		                    <li>Fecha de Adquisición del Bien</li>
		                      @if($form_t12->feAdqBien == '1111-11-11')
		                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="11111111" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="{{$form_t12->feAdqBien}}" maxlength="10">
		                      @endif
	                </div>

            		<div class="col-md-5">
		                    <li>Fecha de Ingreso del Bien</li>
		                      @if($form_t12->feIngBien == '1111-11-11')
		                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="11111111" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="{{$form_t12->feIngBien}}" maxlength="10">
		                      @endif
	                </div>
				</div>
			</div>

			<div class="row col-md-offset-1 separar">
				<div class="col-md-12 form-group">
					<div class="col-md-5">
		                <li><b>Estado del Bien</b></li>
		                  <select name="edoBien" id="edoBien" class="form-control">
		                    <option value="{{$form_t12->selectCondicioninmu->id}}">{{$form_t12->selectCondicioninmu->opcion}}</option>
		                      @foreach($estadoBien as $traeDir)
		                      	@if($traeDir->id != $form_t12->selectCondicioninmu->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-5">
	                    <li>Especifique el Otro Estado del Bien</li>
	                      @if($form_t12->espOtroEdo == '1')
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="noaplica" maxlength="30">
	                       
	                      @else
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="{{$form_t12->espOtroEdo}}" maxlength="30">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12 form-group">
					<div class="col-md-10 form-estilo">
						<li>Descripción del Estado del Bien</li>
	                      @if($form_t12->descEdoBien == '1')
	                        
		                  	 <textarea name="descEdoBien" id="descEdoBien" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                       
	                      @else
	                        
		                  	 <textarea name="descEdoBien" id="descEdoBien" class="form-control" maxlength="255" rows="4">{{$form_t12->descEdoBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                      @endif
                    </div>
                </div>
			</div>
<hr>
<hr>
			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-6 form-estilo">
	                    <li>Oficina de Registro/Notaria</li>
	                      @if($form_t12->ofiRegistro == '1')

	                      <textarea name="ofiRegistro" id="ofiRegistro" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaReg">0/255</div> </div>

	                      @else
	                      <textarea name="ofiRegistro" id="ofiRegistro" class="form-control" maxlength="255" rows="4">{{$form_t12->ofiRegistro}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaReg">0/255</div> </div>
	                      @endif
                    </div>

                    <div class="col-md-6 form-estilo">
	                    <li>Otras Especificaciones de Descripción del Bien</li>
	                      @if($form_t12->refRegistro == '1')
	                      <textarea name="refRegistro" id="refRegistro" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaRef">0/255</div> </div>
	                       
	                      @else
	                      <textarea name="refRegistro" id="refRegistro" class="form-control" maxlength="255" rows="4">{{$form_t12->refRegistro}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaRef">0/255</div> </div>
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
	                    <li>Tomo</li>
	                      @if($form_t12->tomo == '0')
	                           <input type="text" class="form-control" name="tomo" id="tomo" value="99" maxlength="4">
	                       
	                      @else
	                           <input type="text" class="form-control" name="tomo" id="tomo" value="{{$form_t12->tomo}}" maxlength="4">
	                      @endif
                    </div>

                    <div class="col-md-4">
	                    <li>Folio</li>
	                      @if($form_t12->folio == '0')
	                           <input type="text" class="form-control" name="folio" id="folio" value="99" maxlength="5">
	                       
	                      @else
	                           <input type="text" class="form-control" name="folio" id="folio" value="{{$form_t12->folio}}" maxlength="5">
	                      @endif
                    </div>

                    <div class="col-md-4">
	                    <li>Protocolo</li>
	                      @if($form_t12->protocolo == '1')
	                           <input type="text" class="form-control" name="protocolo" id="protocolo" value="xxx" maxlength="20">
	                       
	                      @else
	                           <input type="text" class="form-control" name="protocolo" id="protocolo" value="{{$form_t12->protocolo}}" maxlength="20">
	                      @endif
                    </div>
				</div>
			</div>		
		<hr>
		<hr>
			<div class="row separar">
				<div class="col-md-12 form-group">
					<div class="col-md-4">
		                    <li>Número de Registro</li>
		                      @if($form_t12->numRegistro == '0')
		                           <input type="text" class="form-control" name="numRegistro" id="numRegistro" value="xxx" maxlength="20">
		                       
		                      @else
		                           <input type="text" class="form-control" name="numRegistro" id="numRegistro" value="{{$form_t12->numRegistro}}" maxlength="20">
		                      @endif
	                </div>

	                <div class="col-md-4">
		                    <li>Fecha de Registro</li>
		                      @if($form_t12->feRegistro == '1111-11-11')
		                           <input type="text" class="form-control calendario" name="feRegistro" id="feRegistro" value="11111111" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control calendario" name="feRegistro" id="feRegistro" value="{{$form_t12->feRegistro}}" maxlength="10">
		                      @endif
	                </div>

	                <div class="col-md-4">
		                    <li>Propietario Anterior</li>
		                      @if($form_t12->propieAnt == '1')
		                           <input type="text" class="form-control" name="propieAnt" id="propieAnt" value="xxx" maxlength="200">
		                       
		                      @else
		                           <input type="text" class="form-control" name="propieAnt" id="propieAnt" value="{{$form_t12->propieAnt}}" maxlength="200">
		                      @endif
	                </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 col-md-offset-1 form-group">
					<div class="col-md-10 form-estilo">
	                    <li>Dependencias que lo Integran</li>
	                      @if($form_t12->depenIntegra == '1')
	                      <textarea name="depenIntegra" id="depenIntegra" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaDepen">0/255</div> </div>
	                       
	                      @else
	                      <textarea name="depenIntegra" id="depenIntegra" class="form-control" maxlength="255" rows="4">{{$form_t12->depenIntegra}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaDepen">0/255</div> </div>
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 form-group">
	            	<div class="col-md-4">
		                <li>Área de Construcción</li>
		                   @if($form_t12->areaConstru == '0')
		                    <input type="text" class="form-control" name="areaConstru" id="areaConstru" value="99" maxlength="22">
		                       
		                   @else
		                    <input type="text" class="form-control" name="areaConstru" id="areaConstru" value="{{$form_t12->areaConstru}}" maxlength="22">
		                   @endif
	                </div>

	                <div class="col-md-4">
		                <li><b>Unidad de Medida del Área Construcción</b></li>
		                  <select name="unidadConstru" id="unidadConstru" class="form-control">
		                    <option value="{{$form_t12->selectContrucinmu->id}}">{{$form_t12->selectContrucinmu->opcion}}</option>
		                      @foreach($unidadConstru as $traeDir)
		                      	@if($traeDir->id != $form_t12->selectContrucinmu->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
		                <li>Especifique Otra Unidad de Medida (Construcción)</li>
		                   @if($form_t12->espeOtraUnidad == '1')
		                    <input type="text" class="form-control" name="espeOtraUnidad" id="espeOtraUnidad" value="noaplica" maxlength="100">
		                       
		                   @else
		                    <input type="text" class="form-control" name="espeOtraUnidad" id="espeOtraUnidad" value="{{$form_t12->espeOtraUnidad}}" maxlength="100">
		                   @endif
	                </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 form-group">
	            	<div class="col-md-4">
		                <li>Área del Terreno</li>
		                   @if($form_t12->areaTerreno == '0')
		                    <input type="text" class="form-control" name="areaTerreno" id="areaTerreno" value="99" maxlength="22">
		                       
		                   @else
		                    <input type="text" class="form-control" name="areaTerreno" id="areaTerreno" value="{{$form_t12->areaTerreno}}" maxlength="22">
		                   @endif
	                </div>

	                <div class="col-md-4">
		                <li><b>Unidad de Medida del Área del Terreno</b></li>
		                  <select name="unidadTerreno" id="unidadTerreno" class="form-control">
		                    <option value="{{$form_t12->selectTerrenoinmu->id}}">{{$form_t12->selectTerrenoinmu->opcion}}</option>
		                      @foreach($unidadConstru as $traeDir)
		                      	@if($traeDir->id != $form_t12->selectTerrenoinmu->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
		                <li>Especifique Otra Unidad de Medida (Terreno)</li>
		                   @if($form_t12->espeOtraTerre == '1')
		                    <input type="text" class="form-control" name="espeOtraTerre" id="espeOtraTerre" value="noaplica" maxlength="100">
		                       
		                   @else
		                    <input type="text" class="form-control" name="espeOtraTerre" id="espeOtraTerre" value="{{$form_t12->espeOtraTerre}}" maxlength="100">
		                   @endif
	                </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 col-md-offset-1 form-group">
					<div class="col-md-10 form-estilo">
	                    <li>Otras Especificaciones</li>
	                      @if($form_t12->otrasEspecifi == '1')
	                      <textarea name="otrasEspecifi" id="otrasEspecifi" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaEspe">0/255</div> </div>
	                       
	                      @else
	                      <textarea name="otrasEspecifi" id="otrasEspecifi" class="form-control" maxlength="255" rows="4">{{$form_t12->otrasEspecifi}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="contaEspe">0/255</div> </div>
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12 col-md-offset-1 form-group">
					<div class="col-md-5">
		                <li><b>Se encuentra asegurado el Bien</b></li>
		                  <select name="seguroBien" id="seguroBien" class="form-control">
		                    <option value="{{$form_t12->selectTerrenoinmu->id}}">{{$form_t12->selectTerrenoinmu->opcion}}</option>
		                      @foreach($seguroBien as $traeDir)
		                      	@if($traeDir->id != $form_t12->selectTerrenoinmu->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-5">
		                <li>Código del Registro de Seguro</li>
		                   @if($form_t12->codRegSeguro == '1')
		                    <input type="text" class="form-control" name="codRegSeguro" id="codRegSeguro" value="xxx" maxlength="100">
		                       
		                   @else
		                    <input type="text" class="form-control" name="codRegSeguro" id="codRegSeguro" value="{{$form_t12->codRegSeguro}}" maxlength="100">
		                   @endif
	                </div>
				</div>
			</div>


			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                
	                 <a href="{{ url('/regInmuebles') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
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

 
