
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Semovientes</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>


<div class="container" id="sha">
    <div class="col-md-12">
        <div class="row">
            <div class="panel">
                    <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
              <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE SEMOVIENTES</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
            </div>   
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
            </div>
        </div>
<hr>
        
@include('EliminarAnexosT.anularSemovientes')
          <div class="row separar40">
              <div class="col-md-12">
                 	<div class="col-md-4 form-group">
                 	    <label>Código de Origen del Bien</label>
                  	    <br>{{$seleccion->codBien}}
                 	</div>
                  
                  @if($seleccion->codCata == '1')
                  <div class="col-md-4 form-group">
                      <label>Código según el catalogo</label>
                          <br>xxx
                  </div>
                  @else
                  <div class="col-md-4 form-group">
                      <label>Código según el catalogo</label>
                          <br>{{$seleccion->codCata}}
                  </div>    
                  @endif

              	  <div class="col-md-4 form-group">
                 	    <label>Dependencia Administrativa</label>
                     	    <br>{{$seleccion->selectDependenciasemo->opcion}}
                  </div>
              </div>
          </div>
      
          <div class="row separar40">
              <div class="col-md-12">
                  <div class="col-md-4 form-group">
                  @if($seleccion->sedeOrgano == '1')
                      <label>Sede del Órgano o Ente Donde se Encuentra el Bien</label>
                          <br>xxx
                  </div>
                  @else
                   <label>Sede del Órgano o Ente Donde se Encuentra el Bien</label>
                          <br>{{$seleccion->sedeOrgano}}
                  </div>
                  @endif

                  @if($seleccion->codRespAdm == '1')
                  <div class="col-md-4 form-group">
                      <label>Código del Responsable Administrativo</label>
                        <br>xxx
                  </div> 
                  @else 
                  <div class="col-md-4 form-group">
                      <label>Código del Responsable Administrativo</label>
                          <br>{{$seleccion->codRespAdm}}
                  </div> 
                  @endif

                  @if($seleccion->codResBien == '1')
                    <div class="col-md-4 form-group">
                        <label>Código del Responsable del uso directo del Bien</label>
                            <br>xxx
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Código del Responsable del uso directo del Bien</label>
                            <br>{{$seleccion->codResBien}}
                    </div>
                   @endif
              </div>
          </div>
       
          <div class="row separar">
              <div class="col-md-12">
                   @if($seleccion->codInterno == '1')
                    <div class="col-md-4 form-group">
                        <label>Código interno del Bien</label>
                            <br>xxx
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Código interno del Bien</label>
                            <br>{{$seleccion->codInterno}}
                    </div>
                   @endif

                    <div class="col-md-4 form-group">
                      <label>Estatus del uso del Bien</label>
                          <br>{{$seleccion->estatuBien}}
                    </div>

                    @if($seleccion->espOtroUso == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique el otro uso</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Especifique el otro uso</label>
                            <br>{{$seleccion->espOtroUso}}
                    </div>
                    @endif
              </div>
          </div>
        <hr> 
        <hr>     
          <div class="row separar40">
              <div class="col-md-12">
                    @if($seleccion->valorAdq == '0')
                    <div class="col-md-4 form-group">
                        <label>Valor de Adquisición del Bien</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                      <label>Valor de Adquisición del Bien</label>
                            <br>{{$seleccion->valorAdq}}
                    </div>
                    @endif
                    
                    <div class="col-md-4 form-group">
                        <label>Moneda</label>
                            <br>{{$seleccion->moneda}}
                    </div>
                  
                    @if($seleccion->espeMoneda == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique la Otra Moneda</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                    <label>Especifique la Otra Moneda</label>
                            <br>{{$seleccion->espeMoneda}}
                    </div>
                    @endif
              </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12">
                    @if($seleccion->feAdqBien == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha de Adquisición del Bien</label>
                            <br>11111111
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                    <label>Fecha de Adquisición del Bien</label>
                            <br>{{$seleccion->feAdqBien}}
                    </div>
                    @endif 

                    @if($seleccion->feIngBien == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha de Ingreso del Bien</label>
                            <br>11111111
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Fecha de Ingreso del Bien</label>
                            <br>{{$seleccion->feIngBien}}
                    </div>
                    @endif

                    <div class="col-md-4 form-group">
                        <label>Estado del Bien</label>
                            <br>{{$seleccion->edoBien}}
                    </div>
                </div>
            </div>
        
          <div class="row separar40">
              <div class="col-md-12">
                    @if($seleccion->espOtroEdo == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique el Otro Estado del Bien</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Especifique el Otro Estado del Bien</label>
                            <br>{{$seleccion->espOtroEdo}}
                    </div>
                    @endif

                    @if($seleccion->descEdoBien == '1')
                    <div class="col-md-4 form-group">
                        <label>Descripción del Estado del Bien</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Descripción del Estado del Bien</label>
                            <br>{{$seleccion->descEdoBien}}
                    </div>
                    @endif

                    @if($seleccion->raza == '1')
                    <div class="col-md-4 form-group">
                        <label>Raza</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Raza</label>
                            <br>{{$seleccion->raza}}
                    </div>
                    @endif
              </div>
          </div>

          <div class="row separar40">
              <div class="col-md-12">
                <div class="col-md-4 form-group">
                  <label>Genero</label>
                    <br>{{$seleccion->genero}}
                </div>
              

                <div class="col-md-4 form-group">
                    <label>Tipo de Animal</label>
                      <br>{{$seleccion->tipoAnimal}}
                </div>
                
                @if($seleccion->espeOtroTipo == '1')
                <div class="col-md-4 form-group">
                  <label>espeOtroTipo</label>
                    <br>xxx
                </div>
                @else
                <div class="col-md-4 form-group">
                  <label>espeOtroTipo</label>
                    <br>{{$seleccion->espeOtroTipo}}
                </div>
                @endif
              </div>
          </div>
        <hr>
        <hr> 

          <div class="row separar40">
              <div class="col-md-12">
                <div class="col-md-4 form-group">
                    <label>Propósito</label>
                      <br>{{$seleccion->proposito}}
                </div>

                @if($seleccion->espeOtroPro == '1')
                <div class="col-md-4 form-group">
                    <label>Especifique el Otro Propósito</label>
                     <br>noaplica
                </div>
                @else
                <div class="col-md-4 form-group">
                    <label>Especifique el Otro Propósito</label>
                     <br>{{$seleccion->espeOtroPro}}
                </div>
                @endif

                <div class="col-md-4 form-group">
                    <label>Color del Bien</label>
                      <br>{{$seleccion->codColorBien}}
                </div>
              </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12">

              @if($seleccion->espeColor == '1')
              <div class="col-md-4 form-group">
                  <label>Especificación del Otro Color</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Especificación del Otro Color</label>
                         <br>{{$seleccion->espeColor}}
              </div>
              @endif

              @if($seleccion->otraEspeColor == '1')
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones del Color</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones del Color</label>
                         <br>{{$seleccion->otraEspeColor}}
              </div>
              @endif

              <div class="col-md-4 form-group">
                  <label>Peso</label>
                         <br>{{$seleccion->peso}}
              </div>
            </div>
          </div>
        
          <div class="row separar40">
            <div class="col-md-12">   
              <div class="col-md-4 form-group">
                  <label>Unidad de Medida Peso</label>
                         <br>{{$seleccion->unidadPeso}}
              </div>
              
              @if($seleccion->feNacimiento == '1111-11-11')
              <div class="col-md-4 form-group">
                  <label>Fecha de Nacimiento</label>
                         <br>11111111
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Fecha de Nacimiento</label>
                         <br>{{$seleccion->feNacimiento}}
              </div>
              @endif

              @if($seleccion->numHierro == '1')
              <div class="col-md-4 form-group">
                  <label>Número de Hierro</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Número de Hierro</label>
                         <br>{{$seleccion->numHierro}}
              </div>
              @endif
            </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->seParticulares == '1')
              <div class="col-md-4 form-group">
                  <label>Señas Particulares</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Señas Particulares</label>
                         <br>{{$seleccion->seParticulares}}
              </div>
              @endif

              @if($seleccion->otrasEspecifi == '1')
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones</label>
                         <br>{{$seleccion->otrasEspecifi}}
              </div>
              @endif

              @if($seleccion->seguroBien == '1')
              <div class="col-md-4 form-group">
                  <label>Se encuentra asegurado el Bien</label>
                        <br>S
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Se encuentra asegurado el Bien</label>
                        <br>N
              </div>
              @endif
            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
              

              @if($seleccion->codRegSeguro == '1')
              <div class="col-md-4 form-group">
                  <label>Código del Registro de Seguro:</label>
                        <br>99
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Código del Registro de Seguro:</label>
                            <br>{{$seleccion->codRegSeguro}}
              </div>
              @endif
              </div>
          </div>
          
          <div class="row text-center separar">
             	<div class="col-md-12 separar form-group">
                   <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT10" title="AnularT10"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                   <a href="{{url('regSemovientes')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                      
                   <a href="{{url ('semovientes/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
             	</div>
          </div>
       </div>
   </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
