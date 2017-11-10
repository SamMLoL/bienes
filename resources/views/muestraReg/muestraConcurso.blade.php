<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha de Concurso</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>

  @include('eliminarReg.anularConcurso')  

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12 separar">
            <div class="row">
                <div class="panel">
                    <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                  <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE COMPRA POR CONCURSO</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
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
                    @if($seleccion->codOrigen == '0')
                      <div class="col-md-4 form-group">
                         <label>Código de Origen</label>
                           <br>A-1
                      </div>
                    @else
                      <div class="col-md-4 form-group">
                         <label>Código de Origen</label>
                          <br>{{$seleccion->codOrigen}}
                      </div>
                    @endif

            		    <div class="col-md-4 form-group">
                	     <label>Código de Adquisición</label>
                          <br>{{$seleccion->selectConcurso->opcion}}
                	  </div>

                    @if($seleccion->nomConcurso == '1')

                	  <div class="col-md-4 form-group">
                	     <label>Nombre del Concurso</label>
                          <br>xxx
                	  </div>
                    @else	
                    <div class="col-md-4 form-group">
                        <label>Nombre del Concurso</label>
                       <br>{{$seleccion->nomConcurso}}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row separar40">
                <div class="col-md-12">
                    @if($seleccion->numConcurso == '0')
                        <div class="col-md-4 form-group">
                            <label>Número de Concurso</label>
                           <br>xxx
                        </div>
                    @else
                        <div class="col-md-4 form-group">
                            <label>Número de Concurso</label>
                           <br>{{$seleccion->numConcurso}}
                        </div>
                    @endif

                    @if($seleccion->feConcurso == '1111-11-11')
                        <div class="col-md-4 form-group">
                            <label>Fecha de Concurso</label>
                          <br>11111111
                        </div>
                    @else
                        <div class="col-md-4 form-group">
                            <label>Fecha de Concurso</label>
                          <br>{{$seleccion->feConcurso}}
                        </div>
                    @endif

                    @if($seleccion->codProveedor == '0')
                        <div class="col-md-4 form-group">
                            <label>Código de Proveedor</label>
                           <br>xxx
                        </div>
                    @else
                        <div class="col-md-4 form-group">
                            <label>Código de Proveedor</label>
                           <br>{{$seleccion->codProveedor}}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row separar40">
                <div class="col-md-12">
                    @if($seleccion->numContrato == '0')
                        <div class="col-md-4 form-group">
                            <label>Número de Contrato</label>
                           <br>xxx
                        </div>
                    @else
                        <div class="col-md-4 form-group">
                            <label>Número de Contrato</label>
                           <br>{{$seleccion->numContrato}}
                        </div>
                    @endif

                    @if($seleccion->feContrato == '1111-11-11')
                        <div class="col-md-4 form-group">
                            <label>Fecha de Contrato</label>
                           <br>11111111
                        </div>
                    @else

                        <div class="col-md-4 form-group">
                            <label>Fecha de Contrato</label>
                           <br>{{$seleccion->feContrato}}
                        </div>
                    @endif

                    @if($seleccion->numNotaEntre == '0')
                        <div class="col-md-4 form-group">
                            <label>Número de la Nota de Entrega</label>
                           <br>xxx
                        </div>
                    @else
                        <div class="col-md-4 form-group">
                            <label>Número de la Nota de Entrega</label>
                           <br>{{$seleccion->numNotaEntre}}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row separar40">
                <div class="col-md-12">
                    @if($seleccion->feNotaEntre = '1111-11-11')
                        <div class="col-md-4 form-group">
                            <label>Fecha de Nota de Entrega</label>
                           <br>11111111
                        </div>
                    @else
                        <div class="col-md-4 form-group">
                            <label>Fecha de Nota de Entrega</label>
                           <br>{{$seleccion->feNotaEntre}}
                        </div>
                    @endif

                    @if($seleccion->numFactura == '0')
                        <div class="col-md-4 form-group">
                            <label>Número de Factura</label>
                           <br>xxx
                        </div>
                    @else
                        <div class="col-md-4 form-group">
                            <label>Número de Factura</label>
                           <br>{{$seleccion->numFactura}}
                        </div>
                    @endif

                    @if($seleccion->feFactura == '1111-11-11')
                         <div class="col-md-4 form-group">
                            <label>Fecha de Factura</label>
                          <br>11111111
                        </div>
                    @else
                        <div class="col-md-4 form-group separar40">
                            <label>Fecha de Factura</label>
                          <br>{{$seleccion->feFactura}}
                        </div>
                    @endif
                </div>
              </div>

              <div class="row text-center separar">
                    <div class="col-md-12 separar">
                        <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT2" title="AnularT2"><i class="fa fa-trash-o" aria-hidden="true"></i> <b>Eliminar </b></a>  

                        <a href="{{url('regConcurso')}}" class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>

                        <a href="{{url ('concurso/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a>
                    </div>
              </div>
        </div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

