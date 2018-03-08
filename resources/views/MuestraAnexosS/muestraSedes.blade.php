
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Sedes</title>
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
                      <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE DATOS DE LAS SEDES Y SIMILARES DEL ÓRGANO O ENTE</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
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
                      @if($seleccion->codSede == '1')
                     	<div class="col-md-4 form-group">
                     	    <label for="codSede">Código de la Sede</label>
                      	    <br>xxx
                     	</div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="codSede">Código de la Sede</label>
                              <br>{{$seleccion->codSede}}
                      </div> 
                      @endif

                      
                      <div class="col-md-4 form-group">
                          <label for="tipoSede">Tipo de Sede</label>
                              <br>{{$seleccion->tipoSede}}
                      </div>  
                    
                      
                      @if($seleccion->espeSede == '1')
                      <div class="col-md-4 form-group">
                          <label for="espeSede">Especifique Tipo de Sede o Lugar</label>
                              <br>noaplica
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="espeSede">Especifique Tipo de Sede o Lugar</label>
                              <br>{{$seleccion->espeSede}}
                      </div>  
                      @endif
                  </div>
              </div>
            
              <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->descSede == '1')
                      <div class="col-md-4 form-group">
                          <label for="descSede">Descripción de la Sede</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="descSede">Descripción de la Sede</label>
                              <br>{{$seleccion->descSede}}
                      </div>  
                      @endif
                      
                      @if($seleccion->localizacion == '1')
                      <div class="col-md-4 form-group">
                          <label for="localizacion">Localizacion</label>
                              <br>N
                      </div>  
                      @else
                      <div class="col-md-4 form-group">
                          <label for="localizacion">Localizacion</label>
                              <br>I
                      </div> 
                      @endif

                      <div class="col-md-4 form-group">
                          <label for="codPais">Código del País donde se Ubica la Sede</label>
                              <br>{{$seleccion->selectPais->codPais}}
                      </div> 
                  </div>
            </div>

            <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->espeOtroPais == '1')
                      <div class="col-md-4 form-group">
                          <label for="espeOtroPais">Especifique Otro País</label>
                              <br>noaplica
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="telefono">Especifique Otro País</label>
                              <br>{{$seleccion->espeOtroPais}}
                      </div>  
                      @endif

                      @if($seleccion->codParroquia == '1')
                      <div class="col-md-4 form-group">
                          <label for="codParroquia">Código de Parroquia donde se Ubica el Ente</label>
                              <br>99
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="codParroquia">Código de Parroquia donde se Ubica el Ente</label>
                              <br>{{$seleccion->codParroquia}}
                      </div>  
                      @endif

                      @if($seleccion->codCiudad == '1')
                      <div class="col-md-4 form-group">
                          <label for="codCiudad">Código de la Ciudad donde se Ubica el Ente</label>
                              <br>99
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="codCiudad">Código de la Ciudad donde se Ubica el Ente</label>
                              <br>{{$seleccion->codCiudad}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->espeOtroCiudad == '1')
                      <div class="col-md-4 form-group">
                          <label for="telefono">Especifique Nombre de la Otra Ciudad</label>
                              <br>noaplica
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="espeOtroCiudad">Especifique Nombre de la Otra Ciudad</label>
                              <br>{{$seleccion->espeOtroCiudad}}
                      </div>  
                      @endif

                      @if($seleccion->urbanizacion == '1')
                      <div class="col-md-4 form-group">
                          <label for="urbanizacion">Urbanización</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="urbanizacion">Urbanización</label>
                              <br>{{$seleccion->urbanizacion}}
                      </div>  
                      @endif

                      @if($seleccion->calleAvenida == '1')
                      <div class="col-md-4 form-group">
                          <label for="calleAvenida">Calle / Avenida</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="calleAvenida">Calle / Avenida</label>
                              <br>{{$seleccion->calleAvenida}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row separar40">
                  <div class="col-md-12">
                      @if($seleccion->casaEdificio == '1')
                      <div class="col-md-4 form-group">
                          <label for="casaEdificio">Casa / Edificio</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="casaEdificio">Casa / Edificio</label>
                              <br>{{$seleccion->casaEdificio}}
                      </div>  
                      @endif

                      @if($seleccion->piso == '1')
                      <div class="col-md-4 form-group">
                          <label for="piso">Piso</label>
                              <br>xxx
                      </div>
                      @else
                      <div class="col-md-4 form-group">
                          <label for="piso">Piso</label>
                              <br>{{$seleccion->piso}}
                      </div>  
                      @endif
                  </div>
            </div>

            <div class="row text-center separar">
               	<div class="col-md-12 separar form-group">
                     <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularS4" title="AnularS4"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                     <a href="{{url('regSedes')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                        
                     <a href="{{url ('sedes/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
               	</div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
