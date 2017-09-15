
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anexo T-5</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
<body>
 @include('eliminarReg.anularRegT5')

<div class="container" id="sha">
    <div class="row separar">
        <div class="panel">
                <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE TABLA T-5</b></h5></div>
        </div>
    </div>
        
    <div class="row separar40 col-md-offset-1">
     
       	<div class="col-md-3 form-group">
       	    <label>CÓDIGO DE LA MARCA</label>
        	    <br>{{$seleccion->selectT5->opcion}}
       	</div>

    	  <div class="col-md-3 form-group">
       	    <label>DENOMINACIÓN DE LA MARCA</label>
           	    <br>{{$seleccion->selectT51->opcion}}
        </div>

        <div class="col-md-3 form-group">
            <label>NOMBRE DEL FABRICANTE</label>
                <br>{{$seleccion->selectT52->opcion}}
        </div>

        <div class="col-md-3 form-group">
            <label>FECHA DEL REGISTRO</label>
                <br>{{$seleccion->created_at->format('d-m-Y')}}
        </div>
    </div>

    <div class="row text-center separar">
       	<div class="col-md-12 separar form-group">
             <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT5" title="AnularT5"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

             <a href="{{url('registroT5')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                
       	</div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
