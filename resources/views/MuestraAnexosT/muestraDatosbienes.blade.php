
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Datos Bienes</title>
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
                      <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE DATOS DE LOS BIENES MUEBLES E INMUEBLES</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
                  </div>   
              </div>

              <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
                </div>
              </div>
        <hr>
  @include('EliminarAnexosT.anularDatosbienes') 
      
              <div class="row separar40">
                  <div class="col-md-12">
                     	<div class="col-md-4 form-group">
                     	    <label for="codBien">Código de Origen del Bien</label>
                      	    <br>{{$seleccion->codBien}}
                     	</div>

                      @if($seleccion->codCompo == '1')
                      <div class="col-md-4 form-group">
                          <label for="codCompo">Código Interno del Componente</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="codCompo">Código Interno del Componente</label>
                              <br>{{$seleccion->codCompo}}
                      </div>  
                      @endif

                      @if($seleccion->serialCompo == '1')
                      <div class="col-md-4 form-group">
                          <label for="serialCompo">Serial del Componente</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="serialCompo">Serial del Componente</label>
                              <br>{{$seleccion->serialCompo}}
                      </div>  
                      @endif
                  </div>
              </div>
            
            <div class="row separar">
                  <div class="col-md-12">
                      @if($seleccion->codTipoCompo == '1')
                      <div class="col-md-4 form-group">
                          <label for="codTipoCompo">Código del Tipo de Componente</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="codTipoCompo">Código del Tipo de Componente</label>
                              <br>{{$seleccion->codTipoCompo}}
                      </div>  
                      @endif

                      <div class="col-md-4 form-group">
                          <label for="codBien">Código de la Marca del Componente</label>
                            <br>{{$seleccion->selectMarcadatosb->codMarca}}
                      </div>

                      <div class="col-md-4 form-group">
                          <label for="codBien">Código de la Marca del Componente</label>
                            <br>{{$seleccion->selectModeldatosb->codModel}}
                      </div>
                  </div>
            </div>

            <div class="row separar">
                  <div class="col-md-12">
                      @if($seleccion->descCompo == '1')
                      <div class="col-md-4 form-group">
                          <label for="descCompo">Descripción del Componente</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="descCompo">Descripción del Componente</label>
                              <br>{{$seleccion->descCompo}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row text-center separar">
               	<div class="col-md-12 separar form-group">
                     <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT11" title="AnularT11"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                     <a href="{{url('regDatosbienes')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                        
                     <a href="{{url ('datosbienes/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
               	</div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
