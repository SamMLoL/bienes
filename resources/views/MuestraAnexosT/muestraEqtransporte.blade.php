
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Transporte</title>
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
              <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE EQUIPO DE TRANSPORTE</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
            </div>   
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
            </div>
        </div>
<hr>
   @include('EliminarAnexosT.anularEqtransporte') 
       
          <div class="row separar40">
              <div class="col-md-12">
                 	<div class="col-md-4 form-group">
                 	    <label>Código de Origen del Bien</label>
                  	    <br>{{$seleccion->codBien}}
                 	</div>
                  
                  @if($seleccion->codCata == '1')
                  <div class="col-md-4 form-group">
                      <label>Código según el Catalogo</label>
                          <br>xxx
                  </div>
                  @else
                  <div class="col-md-4 form-group">
                      <label>Código según el Catalogo</label>
                          <br>{{$seleccion->codCata}}
                  </div>    
                  @endif

              	  <div class="col-md-4 form-group">
                 	    <label>Dependencia Administrativa</label>
                     	    <br>{{$seleccion->selectDependenciatr->opcion}}
                  </div>
              </div>
          </div>
      
          <div class="row separar40">
              <div class="col-md-12">
                  <div class="col-md-4 form-group">
                  @if($seleccion->sedeOrgano == '1')
                      <label>Sede del Ente donde se Encuentra el Bien</label>
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
                        <label>Código del Responsable del Uso directo del Bien</label>
                            <br>xxx
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Código del Responsable del Uso directo del Bien</label>
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
                            <br>99.99
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
                    
                    <div class="col-md-4 form-group">
                        <label>Clase del Bien</label>
                            <br>{{$seleccion->claseBien}}
                    </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                    @if($seleccion->espeClase == '1')
                    <div class="col-md-4 form-group">
                        <label>Especifique la Otra Clase</label>
                            <br>noaplica
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Especifique la Otra Clase</label>
                            <br>{{$seleccion->espeClase}}
                    </div>
                    @endif

                    <div class="col-md-4 form-group">
                      <label>Código de la Marca del Bien</label>
                             <br>{{$seleccion->selectMarcatrans->codMarca}}
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Código de la Marca del Bien</label>
                               <br>{{$seleccion->selectModeltrans->codModel}}
                    </div>
              </div>
          </div>
        <hr>
        <hr> 
          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->anoFabriBien == '0')
              <div class="col-md-4 form-group">
                  <label>Año de Fabricación del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Año de Fabricación del Bien</label>
                         <br>{{$seleccion->anoFabriBien}}
              </div>
              @endif

              @if($seleccion->serialCarro == '1')
              <div class="col-md-4 form-group">
                  <label>Serial de Carrocería del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Serial de Carrocería del Bien</label>
                         <br>{{$seleccion->serialCarro}}
              </div>
              @endif

              @if($seleccion->serialMotor == '1')
              <div class="col-md-4 form-group">
                  <label>Serial del Motor del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Serial del Motor del Bien</label>
                         <br>{{$seleccion->serialMotor}}
              </div>
              @endif
            </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->placaBien == '1')
              <div class="col-md-4 form-group">
                  <label>Placas / Siglas del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Placas / Siglas del Bien</label>
                         <br>{{$seleccion->placaBien}}
              </div>
              @endif

              @if($seleccion->numTituPro == '1')
              <div class="col-md-4 form-group">
                  <label>Número del Título de Propiedad</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Número del Título de Propiedad</label>
                         <br>{{$seleccion->numTituPro}}
              </div>
              @endif


              @if($seleccion->codColorBien == '1')
              <div class="col-md-4 form-group">
                  <label>Color del Bien</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Color del Bien</label>
                         <br>{{$seleccion->codColorBien}}
              </div>
              @endif
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
                  <label>Otras Especificación del Color</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Otras Especificación del Color</label>
                         <br>{{$seleccion->otraEspeColor}}
              </div>
              @endif

              @if($seleccion->capacidadBien == '1')
              <div class="col-md-4 form-group">
                  <label>Capacidad del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Capacidad del Bien</label>
                         <br>{{$seleccion->capacidadBien}}
              </div>
              @endif
            </div>
          </div>
         
          <div class="row separar40">
            <div class="col-md-12">

              @if($seleccion->nomDadoBien == '1')
              <div class="col-md-4 form-group">
                  <label>Nombre dado al Bien</label>
                         <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Nombre dado al Bien</label>
                         <br>{{$seleccion->nomDadoBien}}
              </div>
              @endif

              @if($seleccion->usoBien == '1')
              <div class="col-md-4 form-group">
                  <label>Uso del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Uso del Bien</label>
                         <br>{{$seleccion->usoBien}}
              </div>
              @endif

              @if($seleccion->espeTecBien == '1')
              <div class="col-md-4 form-group">
                  <label>Especificaciones Técnicas del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Especificaciones Técnicas del Bien</label>
                         <br>{{$seleccion->espeTecBien}}
              </div>
              @endif
            </div>
          </div>
      <hr>
      <hr>
          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->otraEspeBien == '1')
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones de Descripción del Bien</label>
                         <br>xxx
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Otras Especificaciones de Descripción del Bien</label>
                         <br>{{$seleccion->otraEspeBien}}
              </div>
              @endif

              @if($seleccion->garantia == '1')
              <div class="col-md-4 form-group">
                  <label>Garantía</label>
                         <br>99
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Garantía</label>
                         <br>{{$seleccion->garantia}}
              </div>
              @endif

              <div class="col-md-4 form-group">
                  <label>Unidad de Medida de la Garantía</label>
                        <br>{{$seleccion->unidadMedi}}
              </div>
            </div>
          </div>

          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->feIniGarantia == '1111-11-11')
              <div class="col-md-4 form-group">
                  <label>Fecha Inicio de la Garantía</label>
                        <br>11111111
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Fecha Inicio de la Garantía</label>
                            <br>{{$seleccion->feIniGarantia}}
              </div>
              @endif

              @if($seleccion->feFinGarantia == '1111-11-11')
              <div class="col-md-4 form-group">
                  <label>Fecha Fin de la Garantía</label>
                        <br>11111111
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Fecha Fin de la Garantía</label>
                            <br>{{$seleccion->feFinGarantia}}
              </div>
              @endif

              @if($seleccion->tieneSistema == '1')
              <div class="col-md-4 form-group">
                  <label>Tiene sistema de rastreo instalado</label>
                        <br>S
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Tiene Sistema de Rastreo Instalado</label>
                            <br>N
              </div>
              @endif
            </div>
          </div>
        
          <div class="row separar40">
            <div class="col-md-12">
              @if($seleccion->espeSistema == '1')
              <div class="col-md-4 form-group">
                  <label>Especificaciones sistema de rastreo instalado</label>
                        <br>noaplica
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Especificaciones sistema de rastreo instalado</label>
                            <br>{{$seleccion->espeSistema}}
              </div>
              @endif

              @if($seleccion->tieneSistema == '1')
              <div class="col-md-4 form-group">
                  <label>Posee Componentes</label>
                        <br>S
              </div>
              @else
              <div class="col-md-4 form-group">
                  <label>Posee Componentes</label>
                            <br>N
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

          <div class="row separar40">
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
                   <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT9" title="AnularT9"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                   <a href="{{url('regTransporte')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                      
                   <a href="{{url ('transporte/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
             	</div>
          </div>
       </div>
   </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
