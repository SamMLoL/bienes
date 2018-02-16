
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha de Máxima</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>


<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
              <div class="row">
                  <div class="panel">
                        <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                      <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE DATOS DE LA MÁXIMA AUTORIDAD DEL ÓRGANO O ENTE</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
                  </div>   
              </div>

              <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
                </div>
              </div>
@include('EliminarAnexosS.anularMaxima')
        <hr>
              <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->cedula == '1')
                     	<div class="col-md-4 form-group">
                     	    <label for="cedula">Cédula</label>
                      	    <br>xxx
                     	</div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="cedula">Cédula</label>
                              <br>{{$seleccion->cedula}}
                      </div> 
                      @endif

                      @if($seleccion->nombre == '1')
                      <div class="col-md-4 form-group">
                          <label for="nombre">Nombre</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="nombre">Nombre</label>
                              <br>{{$seleccion->nombre}}
                      </div>  
                      @endif

                      @if($seleccion->apellido == '1')
                      <div class="col-md-4 form-group">
                          <label for="apellido">Apellido</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="apellido">Apellido</label>
                              <br>{{$seleccion->apellido}}
                      </div>  
                      @endif
                  </div>
              </div>
            
              <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->telefono == '0')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Teléfono</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Teléfono</label>
                              <br>{{$seleccion->telefono}}
                      </div>  
                      @endif

                      @if($seleccion->telefono == '0')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Teléfono</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Teléfono</label>
                              <br>{{$seleccion->telefono}}
                      </div>  
                      @endif

                      @if($seleccion->cargo == '1')
                      <div class="col-md-4 form-group">
                          <label for="cargo">Cargo</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Cargo</label>
                              <br>{{$seleccion->cargo}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->correo == '1')
                      <div class="col-md-4 form-group">
                          <label for="correo">Correo Electrónico</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="correo">Correo Electrónico</label>
                              <br>{{$seleccion->correo}}
                      </div>  
                      @endif

                      @if($seleccion->numGaceta == '0')
                      <div class="col-md-4 form-group">
                          <label for="numGaceta">Número de Gaceta</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="numGaceta">Número de Gaceta</label>
                              <br>{{$seleccion->numGaceta}}
                      </div>  
                      @endif

                      @if($seleccion->feGaceta == '1111-11-11')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Fecha de Gaceta</label>
                              <br>11111111
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="feGaceta">Fecha de Gaceta</label>
                              <br>{{$seleccion->feGaceta}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->numDecre == '0')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Número de Resolución o Decreto</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="numDecre">Número de Resolución o Decreto</label>
                              <br>{{$seleccion->numDecre}}
                      </div>  
                      @endif

                      @if($seleccion->feDecre == '1111-11-11')
                      <div class="col-md-4 form-group">
                          <label for="feDecre">Fecha de Decreto</label>
                              <br>11111111
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="feDecre">Fecha de Decreto</label>
                              <br>{{$seleccion->feDecre}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row text-center separar">
               	<div class="col-md-12 separar form-group">
                     <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularS2" title="AnularS2"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                     <a href="{{url('regMaxima')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                        
                     <a href="{{url ('maxima/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
               	</div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
