
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anexo T-3</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
<body>
  @include('eliminarReg.anularRegT3')

<div class="container" id="sha">
    <div class="row separar">
        <div class="panel">
                <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE TABLA T-3</b></h5></div>
        </div>
    </div>
        
    <div class="row separar40">
     
       	<div class="col-md-3 form-group">
       	    <label>CÓDIGO DE REGISTRO</label>
        	    <br>{{$seleccion->codRegT3 }}
       	</div>

    	  <div class="col-md-3 form-group">
       	    <label>COMPAÑIA ASEGURADORA</label>
           	    <br>{{$seleccion->selectT3->opcion}}
        </div>

        @if($seleccion->otraCom == '1')
        <div class="col-md-3 form-group">
            <label>OTRA COMPAÑÍA ASEGURADORA</label>
                <br>noaplica
        </div>
        @else
        <div class="col-md-3 form-group">
            <label>OTRA COMPAÑÍA ASEGURADORA</label>
                <br>{{$seleccion->otraCom}}
        </div>  	
        @endif

        @if($seleccion->numPoli == '0 ')
        <div class="col-md-3 form-group">
            <label>NÚMERO DE PÓLIZA</label>
        	    <br>XXX
        </div>
        @else
        <div class="col-md-3 form-group">
            <label>NÚMERO DE PÓLIZA</label>
                <br>{{$seleccion->numPoli}}
        </div>
        @endif
    </div>

    <div class="row separar40">

       <div class="col-md-3 form-group">
            <label>TIPO DE PÓLIZA</label>
                <br>{{$seleccion->selectT31->opcion}}
        </div>


       @if($seleccion->montoAse == '0')
        <div class="col-md-3 form-group">
            <label>MONTO ASEGURADO</label>
              <br>XXX
        </div> 
       @else 
        <div class="col-md-3 form-group">
            <label>MONTO ASEGURADO</label>
                <br>{{$seleccion->montoAse}}
        </div> 
       @endif

        <div class="col-md-3 form-group">
            <label>MONEDA</label>
                <br>{{$seleccion->selectT32->opcion}}
        </div>

       @if($seleccion->espMone == '1')
        <div class="col-md-3 form-group">
            <label>ESPECIFIQUE LA MONEDA</label>
                <br>noaplica
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>ESPECIFIQUE LA MONEDA</label>
                <br>{{$seleccion->espMone}}
        </div>
       @endif
       
    </div>

    <div class="row separar40">

       

       @if($seleccion->feiniPoli == '1111-11-11')
        <div class="col-md-3 form-group">
            <label>FECHA DE INICIO DE PÓLIZA</label>
                <br>11111111
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>FECHA DE INICIO DE PÓLIZA</label>
                <br>{{$seleccion->feiniPoli}}
        </div>
       @endif

       @if($seleccion->fefinPoli == '1111-11-11')
        <div class="col-md-3 form-group">
            <label>FECHA FINAL DE PÓLIZA</label>
                <br>11111111
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>FECHA FINAL DE PÓLIZA</label>
                <br>{{$seleccion->fefinPoli}}
        </div>
       @endif

        <div class="col-md-3 form-group">
            <label>POSEE RESPONSABILIDAD CIVIL</label>
                <br>{{$seleccion->selectT33->opcion}}
        </div>

        <div class="col-md-3 form-group">
            <label>TIPO COBERTURA DE LA PÓLIZA</label>
                <br>{{$seleccion->selectT34->opcion}}
        </div>
    </div>

    <div class="row">
        @if($seleccion->espeCobe == '1')
        <div class="col-md-3 form-group">
            <label>ESPECIFIQUE TIPO DE COBERTURA</label>
                <br>XXX
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>ESPECIFIQUE TIPO DE COBERTURA</label>
                <br>{{$seleccion->espeCobe}}
        </div>
       @endif

       @if($seleccion->descCobe == '1')
        <div class="col-md-3 form-group">
            <label>DESCRIPCIÓN DE LA COBERTURA</label>
                <br>XXX
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>DESCRIPCIÓN DE LA COBERTURA</label>
                <br>{{$seleccion->descCobe}}
        </div>
       @endif
    </div>

       
    <div class="row text-center separar">
       	<div class="col-md-12 separar form-group">
             <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT3" title="AnularT3"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

             <a href="{{url('registroT3')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                
             <a href="{{url ('t3/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
       	</div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
