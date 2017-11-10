
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha Marca</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>
 @include('eliminarReg.anularMarca')

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel">
                        <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                      <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE MARCAS</b> <i class="fa fa-file-text-o" aria-hidden="true"></i></h5></div>
                </div>   
            </div>

            <div class="row">
                  <div class="col-md-12 text-center">
                      <h4>Ficha de Registro <b id="colorInstruccion">N°# {{$seleccion->id}}</b></h4>
                  </div>
            </div>
            
          <hr>

            <div class="row separar40 ">
                <div class="col-md-12">
                   	<div class="col-md-4 form-group">
                   	    <label>Código de la Marca</label>
                    	    <br>{{$seleccion->selectMarca->opcion}}
                   	</div>

                	  <div class="col-md-4 form-group">
                   	    <label>Denominación de la Marca</label>
                       	    <br>{{$seleccion->selectMarca1->opcion}}
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Nombre del Fabricante</label>
                            <br>{{$seleccion->selectMarca2->opcion}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 form-group">
                        <label>Fecha del Registro</label>
                            <br>{{$seleccion->created_at->format('d-m-Y')}}
                    </div>
                </div>
            </div>

            <div class="row text-center separar">
               	<div class="col-md-12 separar form-group">
                     <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT5" title="AnularT5"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a>

                     <a href="{{url('regMarca')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                        
               	</div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
