
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha de Básicos</title>
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
                      <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO BÁSICOS DEL ÓRGANO O ENTE</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
                  </div>   
              </div>

              <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
                </div>
              </div>
        <hr>
        
@include('EliminarAnexosS.anularBasicos')

              <div class="row separar40">
                  <div class="col-md-12">
                     	<div class="col-md-4 form-group">
                     	    <label for="codProvee">Código SIGECOF</label>
                      	    <br>{{$seleccion->codSigecof}}
                     	</div>

                      @if($seleccion->siglas == '1')
                      <div class="col-md-4 form-group">
                          <label for="siglas">Siglas</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="siglas">Siglas</label>
                              <br>{{$seleccion->siglas}}
                      </div>  
                      @endif

                      
                      <div class="col-md-4 form-group">
                          <label for="rifProvee">RIF</label>
                             <br>
                              <?php
                              if($seleccion->grupo == '1'){
                                echo 'J-'."".$seleccion->rifProvee;
                              }
                             
                              elseif($seleccion->grupo == '2'){
                                echo 'V-'."".$seleccion->rifProvee;
                              }
                             
                              else{
                                echo 'G-'."".$seleccion->rifProvee;
                              }
                             
                              ?>
                      </div>
                  </div>
              </div>
            
              <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->razonSocial == '1')
                      <div class="col-md-4 form-group">
                          <label for="razonSocial">Razón Social</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="razonSocial">Razón Social</label>
                              <br>{{$seleccion->razonSocial}}
                      </div>  
                      @endif

                      @if($seleccion->telfEnte == '0')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Teléfono</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Teléfono</label>
                              <br>{{$seleccion->telfEnte}}
                      </div>  
                      @endif

                      @if($seleccion->direcWeb == '1')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Dirección Web</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Dirección Web</label>
                              <br>{{$seleccion->direcWeb}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->correEnte == '1')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Correo Electrónico</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Correo Electrónico</label>
                              <br>{{$seleccion->correEnte}}
                      </div>  
                      @endif

                      @if($seleccion->feGaceta == '1111-11-11')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Fecha Gaceta</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Fecha Gaceta</label>
                              <br>{{$seleccion->feGaceta}}
                      </div>  
                      @endif

                      @if($seleccion->numGaceta == '1')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Número de Gaceta</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Número de Gaceta</label>
                              <br>{{$seleccion->numGaceta}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row text-center separar">
               	<div class="col-md-12 separar form-group">
                     <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularS1" title="AnularS1"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                     <a href="{{url('regBasicos')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                        
                     <a href="{{url ('basicos/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
               	</div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
