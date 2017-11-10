
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Transferencia</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>
  @include('eliminarReg.anularRegTransferencia')

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel">
                        <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                     <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE PERMUTA</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
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
                  @if($seleccion->codOt2_7 == '0')
                 	<div class="col-md-4 form-group">
                 	    <label>Código de Origen</label>
                  	    <br>G-1
                 	</div>

                  @else
                  <div class="col-md-4 form-group">
                      <label>Código de Origen</label>
                          <br>{{$seleccion->codOt2_7}}
                  </div>
                  @endif
           
              	  <div class="col-md-4 form-group">
                 	    <label>Código de Adquisición</label>
                     	    <br>{{$seleccion->selectTransferencia->opcion}}
                  </div>

                 @if($seleccion->nomQtra == '1')
                  <div class="col-md-4 form-group">
                      <label>Nombre de Quien Transfiere</label>
                          <br>xxx
                  </div>
                  @else
                  <div class="col-md-4 form-group">
                      <label>Nombre de Quien Transfiere</label>
                          <br>{{$seleccion->nomQtra}}
                  </div>  	
                  @endif
              </div>
          </div> 

          <div class="row separar40">
              <div class="col-md-12"> 
                  @if($seleccion->nomBen == '1')
                  <div class="col-md-4 form-group">
                      <label>Nombre del Beneficiario</label>
                  	    <br>xxx
                  </div>
                  @else
                  <div class="col-md-4 form-group">
                      <label>Nombre del Beneficiario</label>
                          <br>{{$seleccion->nomBen}}
                  </div>
                  @endif
              
                  @if($seleccion->numAuto == '0')
                  <div class="col-md-4 form-group">
                      <label>Nombre de Autorización</label>
                  	    <br>xxx
                  </div> 
                  @else 
                  <div class="col-md-4 form-group">
                      <label>Nombre de Autorización</label>
                          <br>{{$seleccion->numAuto}}
                  </div> 
                  @endif

                  @if($seleccion->nomRegn == '0')
                  <div class="col-md-4 form-group">
                      <label>Nombre del Registro o Notaría</label>
                        <br>xxx
                  </div> 
                  @else 
                  <div class="col-md-4 form-group">
                      <label>Nombre del Registro o Notaría</label>
                          <br>{{$seleccion->nomRegn}}
                  </div> 
                  @endif
              </div>
          </div>

          <div class="row separar40">
              <div class="col-md-12">
                   @if($seleccion->tomo == '1')
                    <div class="col-md-4 form-group">
                        <label>Tomo</label>
                            <br>xxx
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Tomo</label>
                            <br>{{$seleccion->tomo}}
                    </div>
                   @endif
                   
                   @if($seleccion->folio == '0')
                    <div class="col-md-4 form-group">
                        <label>Folio</label>
                            <br>99
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Folio</label>
                            <br>{{$seleccion->folio}}
                    </div>
                   @endif

                   @if($seleccion->feAuto == '1111-11-11')
                    <div class="col-md-4 form-group">
                        <label>Fecha de Autorización</label>
                            <br>11111111
                    </div>
                   @else
                    <div class="col-md-4 form-group">
                        <label>Fecha de Autorización</label>
                            <br>{{$seleccion->feAuto}}
                    </div>
                   @endif
              </div>
          </div>

          <div class="row separar">
              <div class="col-md-12">
                   @if($seleccion->feReg == '1111-11-11')
                    <div class="col-md-3 form-group">
                        <label>Fecha de Registro</label>
                            <br>11111111
                    </div>
                   @else
                    <div class="col-md-3 form-group">
                        <label>Fecha de Registro</label>
                            <br>{{$seleccion->feReg}}
                    </div>
                   @endif
              </div>
          </div>

             
          <div class="row text-center separar">
             	<div class="col-md-12 separar form-group">
                   <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT27" title="AnularT27"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                   <a href="{{url('regTransferencia')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                      
                   <a href="{{url ('transferencia/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
             	</div>
          </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
