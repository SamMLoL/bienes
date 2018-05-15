
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Responsable de los Bienes</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>
  @include('EliminarAnexosT.anularResponsables')

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                  <div class="panel">
                    <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                      <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO RESPONSABLE DE LOS BIENES</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
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
                   	    <label>Código del Responsable</label>
                    	    <br>{{$seleccion->codResp }}
                   	</div>

                	  <div class="col-md-4 form-group">
                    @if($seleccion->tipoResp == '1')
                   	    <label>Tipo de Responsable</label>
                       	    <br>D
                    </div>
                    @elseif($seleccion->tipoResp == '2')
                    <label>Tipo de Responsable</label>
                            <br>U
                    </div>
                    @else
                    <label>Tipo de Responsable</label>
                            <br>C
                    </div>
                    @endif


                    <div class="col-md-4 form-group">
                        <label>Cédula de Identidad</label>
                            <br>{{$seleccion->cedula}}
                    </div> 
                </div> 	
            </div>

            <div class="row separar40">
                <div class="col-md-12">
                    <div class="col-md-4 form-group">
                        <label>Nombre del Responsable</label>
                            <br>{{$seleccion->nomRes}}
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Apellido del Responsable</label>
                            <br>{{$seleccion->apeRes}}
                    </div>    
                  
                    <div class="col-md-4 form-group">
                        <label>Teléfono del Responsable</label>
                            <br>{{$seleccion->telfRes}}
                    </div>
                </div>
            </div>

            <div class="row separar40">
                <div class="col-md-12">
                    <div class="col-md-4 form-group">
                        <label>Cargo del Responsable</label>
                            <br>{{$seleccion->cargoRes}}
                    </div>
                    
                    @if($seleccion->correRes == '0')
                    <div class="col-md-4 form-group">
                        <label>Correo del Responsable</label>
                            <br>xxx
                    </div>
                    @else
                    <div class="col-md-4 form-group">
                        <label>Correo del Responsable</label>
                            <br>{{$seleccion->correRes}}
                    </div>
                    @endif
                    
    
                    <div class="col-md-4 form-group">
                        <label>Dependencia Administrativa</label>
                            <br>{{$seleccion->selectUnidad->codigo}}
                    </div>
                </div>
            </div>
       
            <div class="row text-center separar">
               	<div class="col-md-12 separar form-group">
                     <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT4" title="AnularT4"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

                     <a href="{{url('regResponsables')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                        
                     <a href="{{url ('responsables/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
               	</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
