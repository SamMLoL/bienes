
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anexo T-4</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
<body>
  @include('eliminarReg.anularRegT4')

<div class="container" id="sha">
    <div class="row separar">
        <div class="panel">
                <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE TABLA T-4</b></h5></div>
        </div>
    </div>
        
    <div class="row separar40">
     
       	<div class="col-md-3 form-group">
       	    <label>CÓDIGO DEL RESPONSABLE</label>
        	    <br>{{$seleccion->codResp }}
       	</div>

    	  <div class="col-md-3 form-group">
       	    <label>TIPO DE RESPONSABLE</label>
           	    <br>{{$seleccion->selectT4->opcion}}
        </div>

        <div class="col-md-3 form-group">
            <label>CÉDULA DE IDENTIDAD</label>
                <br>{{$seleccion->cedula}}
        </div>

        <div class="col-md-3 form-group">
            <label>NOMBRE DEL RESPONSABLE</label>
                <br>{{$seleccion->nomRes}}
        </div>  	
    </div>

    <div class="row separar40">
        <div class="col-md-3 form-group">
            <label>APELLIDO DEL RESPONSABLE</label>
                <br>{{$seleccion->apeRes}}
        </div>    
      
        <div class="col-md-3 form-group">
            <label>TELÉFONO RESPONSABLE</label>
                <br>{{$seleccion->telfRes}}
        </div>

        <div class="col-md-3 form-group">
            <label>CARGO DEL RESPONSABLE</label>
                <br>{{$seleccion->cargoRes}}
        </div>

        <div class="col-md-3 form-group">
            <label>CORREO DEL RESPONABLE</label>
                <br>{{$seleccion->correRes}}
        </div>
    </div>

    <div class="row separar40">
        <div class="col-md-3 form-group">
            <label>DEPENDENCIA ADMINISTRATIVA</label>
                <br>{{$seleccion->selectT41->opcion}}
        </div>
    </div>
       
    <div class="row text-center separar">
       	<div class="col-md-12 separar form-group">
             <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT4" title="AnularT4"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

             <a href="{{url('registroT4')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                
             <a href="{{url ('t4/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
       	</div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
