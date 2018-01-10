
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha de Proveedores</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>
  @include('eliminarReg.anularProveedores')

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
              <div class="row">
                  <div class="panel">
                        <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                      <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE PROVEEDORES</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
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
                     	    <label for="codProvee">Código del Proveedor</label>
                      	    <br>{{$seleccion->codProvee}}
                     	</div>

                      <div class="col-md-4 form-group">
                     	    <label for="descProvee">Descripción del Proveedor</label>
                         	    <br>{{$seleccion->descProvee}}
                      </div>

                      <div class="col-md-4 form-group">
                          <label for="tipProvee">Tipo de Proveedor</label>
                              <br>{{$seleccion->selectProvee->opcion}}
                      </div>
                  </div>
              </div>
            
            <div class="row separar">
                  <div class="col-md-12">
                      <div class="col-md-4 form-group">
                          <label for="rifProvee">Número de Rif</label>
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
                     
                      @if($seleccion->otraDesc == '0')
                      <div class="col-md-4 form-group">
                          <label for="otraDesc">Otra Descripción</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="otraDesc">Otra Descripción</label>
                              <br>{{$seleccion->otraDesc}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row text-center separar">
               	<div class="col-md-12 separar form-group">
                     <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularR" title="AnularR"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                     <a href="{{url('regProveedores')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                        
                     <a href="{{url ('proveedores/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
               	</div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
