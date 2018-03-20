
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Seguros</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>

  @include('EliminarAnexosT.anularSeguros')

<div class="container" id="sha">
    <div class="col-md-12">
        <div class="row">
            <div class="panel">
                    <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
              <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE SEGUROS</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
            </div>   
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
            </div>
        </div>
        <hr>
        
          <div class="row separar40">
              <div class="col-md-12">
                 	
                  <div class="col-md-4 form-group">
                 	    <label>Código de Origen</label>
                  	    <br>{{$seleccion->codRegT3}}
                 	</div>

              	  <div class="col-md-4 form-group">
                 	    <label>Compañia Aseguradora</label>
                     	    <br>{{$seleccion->selectSeguros->opcion}}
                  </div>

                  @if($seleccion->otraCom == '1')
                  <div class="col-md-4 form-group">
                      <label>Otra Compañia Aseguradora</label>
                          <br>noaplica
                  </div>
                  @else
                  <div class="col-md-4 form-group">
                      <label>Otra Compañia Aseguradora</label>
                          <br>{{$seleccion->otraCom}}
                  </div>  	
                  @endif
              </div>
          </div>

          <div class="row separar40">
              <div class="col-md-12">
                  @if($seleccion->numPoli == '0')
                  <div class="col-md-4 form-group">
                      <label>Número de Póliza</label>
                        <br>xxx
                  </div>
                  @else
                  <div class="col-md-4 form-group">
                      <label>Número de Póliza</label>
                          <br>{{$seleccion->numPoli}}
                  </div>
                  @endif

                  <div class="col-md-4 form-group">
                  @if($seleccion->tipPoli == '1')
                      <label>Tipo de Póliza</label>
                          <br>I
                  </div>
                  @else
                   <label>Tipo de Póliza</label>
                          <br>C
                  </div>
                  @endif

                  @if($seleccion->montoAse == '0')
                  <div class="col-md-4 form-group">
                      <label>Monto Asegurado</label>
                        <br>99.99
                  </div> 
                  @else 
                  <div class="col-md-4 form-group">
                      <label>Monto Asegurado</label>
                          <br>{{$seleccion->montoAse}}
                  </div> 
                  @endif
              </div>
          </div>

          <div class="row separar40">
              <div class="col-md-12">

                    <div class="col-md-4 form-group">
                        <label>Moneda</label>
                            <br>{{$seleccion->moneda}}
                    </div>

                   @if($seleccion->espeMoneda == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique la Moneda</label>
                            <br>noaplica
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Especifique la Moneda</label>
                            <br>{{$seleccion->espeMoneda}}
                    </div>
                   @endif

                   @if($seleccion->feiniPoli == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha de Inicio de Póliza</label>
                            <br>11111111
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Fecha de Inicio de Póliza</label>
                            <br>{{$seleccion->feiniPoli}}
                    </div>
                   @endif
              </div>
          </div>
             
          <div class="row separar40">
              <div class="col-md-12">
                   @if($seleccion->fefinPoli == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha Final de Póliza</label>
                            <br>11111111
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Fecha Final de Póliza</label>
                            <br>{{$seleccion->fefinPoli}}
                    </div>
                   @endif

                    <div class="col-md-4 form-group">
                    @if($seleccion->poseRes == '1')
                        <label>Posee Responsabilidad Civil</label>
                            <br>S
                    </div>
                    @else
                    <label>Posee Responsabilidad Civil</label>
                            <br>N
                    </div>
                    @endif

                    <div class="col-md-4 form-group">
                        <label>Tipo de Cobertura de la Póliza</label>
                            <br>{{$seleccion->tipoCobe}}
                    </div>
              </div>
          </div>

          <div class="row separar">
            <div class="col-md-12">
                  @if($seleccion->espeCobe == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique el Tipo de Cobertura</label>
                            <br>noaplica
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Especifique el Tipo de Cobertura</label>
                            <br>{{$seleccion->espeCobe}}
                    </div>
                   @endif

                   @if($seleccion->descCobe == '1')
                    <div class="col-md-3 form-group">
                        <label>Descripción de la Cobertura</label>
                            <br>xxx
                    </div>
                   @else
                    <div class="col-md-3 form-group">
                        <label>Descripción de la Cobertura</label>
                            <br>{{$seleccion->descCobe}}
                    </div>
                   @endif
            </div>
          </div>

          <div class="row text-center separar">
             	<div class="col-md-12 separar form-group">
                   <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT3" title="AnularT3"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                   <a href="{{url('regSeguros')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                      
                   <a href="{{url ('seguros/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
             	</div>
          </div>
       </div>
   </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
