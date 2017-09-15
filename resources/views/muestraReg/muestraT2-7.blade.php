
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anexo T-2-7</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
<body>
  @include('eliminarReg.anularRegT2-7')

<div class="container" id="sha">
    <div class="row separar">
        <div class="panel">
                <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div id="panelTitu" class="panel-heading text-center"><h5 id="h5Titu"><b>REGISTRO DE TABLA T-2-7</b></h5></div>
        </div>
    </div>
        
    <div class="row separar40">
       @if($seleccion->codOt2_7 == '0')
       	<div class="col-md-3 form-group">
       	    <label>CÓDIGO DE ORIGEN</label>
        	    <br>G-1
       	</div>

        @else
        <div class="col-md-3 form-group">
            <label>CÓDIGO DE ORIGEN</label>
                <br>{{$seleccion->codOt2_7}}
        </div>
        @endif
 
    	  <div class="col-md-3 form-group">
       	    <label>CÓDIGO FORMA DE ADQUISICIÓN</label>
           	    <br>{{$seleccion->selectT27->opcion}}
        </div>

       @if($seleccion->nomQtra == '1')
        <div class="col-md-3 form-group">
            <label>NOMBRE DE QUIEN TRANSFIERE</label>
                <br>XXX
        </div>
        @else
        <div class="col-md-3 form-group">
            <label>NOMBRE DE QUIEN TRANSFIERE</label>
                <br>{{$seleccion->nomQtra}}
        </div>  	
        @endif

        @if($seleccion->nomBen == '1')
        <div class="col-md-3 form-group">
            <label>NOMBRE DEL BENEFICIARIO</label>
        	    <br>XXX
        </div>
        @else
        <div class="col-md-3 form-group">
            <label>NOMBRE DEL BENEFICIARIO</label>
                <br>{{$seleccion->nomBen}}
        </div>
        @endif
    </div>

    <div class="row separar40">

       @if($seleccion->numAuto == '0')
        <div class="col-md-3 form-group">
            <label>NOMBRE DE LA AUTORIZACIÓN</label>
        	    <br>XXX
        </div> 
       @else 
        <div class="col-md-3 form-group">
            <label>NOMBRE DE LA AUTORIZACIÓN</label>
                <br>{{$seleccion->numAuto}}
        </div> 
       @endif


       @if($seleccion->nomRegn == '0')
        <div class="col-md-3 form-group">
            <label>NOMBRE DEL REGISTRO O NOTARÍA</label>
              <br>XXX
        </div> 
       @else 
        <div class="col-md-3 form-group">
            <label>NOMBRE DEL REGISTRO O NOTARÍA</label>
                <br>{{$seleccion->nomRegn}}
        </div> 
       @endif

       @if($seleccion->tomo == '1')
        <div class="col-md-3 form-group">
            <label>TOMO</label>
                <br>XXX
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>TOMO</label>
                <br>{{$seleccion->tomo}}
        </div>
       @endif
       
       @if($seleccion->folio == '0')
        <div class="col-md-3 form-group">
            <label>FOLIO</label>
                <br>99
        </div>
       @else

        <div class="col-md-3 form-group">
            <label>FOLIO</label>
                <br>{{$seleccion->folio}}
        </div>
       @endif
    </div>

    <div class="row separar40">


   	   @if($seleccion->feAuto == '1111-11-11')
        <div class="col-md-3 form-group">
            <label>FECHA DE AUTORIZACIÓN</label>
                <br>11111111
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>FECHA DE AUTORIZACIÓN</label>
                <br>{{$seleccion->feAuto}}
        </div>
       @endif

       @if($seleccion->feReg == '1111-11-11')
        <div class="col-md-3 form-group">
            <label>FECHA DE REGISTRO</label>
                <br>11111111
        </div>
       @else
        <div class="col-md-3 form-group">
            <label>FECHA DE REGISTRO</label>
                <br>{{$seleccion->feReg}}
        </div>
       @endif
    </div>

       
    <div class="row text-center separar">
       	<div class="col-md-12 separar form-group">
             <a  class="btn btn-danger"  data-toggle="modal" data-target="#AnularT27" title="AnularT27"  ><i class="fa fa-trash-o" aria-hidden="true"> <b>Eliminar</b></i></a> 

             <a href="{{url('registroT2-7')}}"  class="btn btn-success"><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a>
                
             <a href="{{url ('t27/'.$seleccion->id) }}/edit" class="btn btn-info" title="Modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"> <b>Modificar</b></i></a> 
       	</div>
    </div>
</div>
</body>
</html>

  <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
