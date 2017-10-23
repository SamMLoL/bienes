<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Modificar Anexo T-5</title>

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  </head>
<body>

  <div class="container" id="sha">
      <div class="row separar">
          <div class="panel">
               <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
             <div class="panel-heading text-center"><h5><b>MODIFICAR ANEXO T-5</b></h5></div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-12 desvanecer">
          @if(session()->has('msj'))
              <center><div  class="col-md-12  alert alert-success" role="alert">{{session('msj')}}</div></center>
                 @endif

                 @if(session()->has('errormsj'))
              <center><div  class="col-md-12  alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
          @endif
        </div>
      </div>

    <form role="form" method="POST" action="{{route('t5.update', $form_t5->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

      <div class="row">
        <div class="col-md-12">
         <div class="col-md-4">
             <label for="codMarca">CÓDIGO DE LA MARCA</label>
                <input type="text" class="form-control" name="codMarca" id="codMarca" value="{{$form_t5->selectT5->opcion}}"  placeholder="Introduzca nombres" maxlength="100" autofocus> 
         </div>
       
         <div class="col-md-4">
             <label for="denCoMar">DENOMINACIÓN DE LA MARCA</label>   
                <input type="text" class="form-control" name="denCoMar" id="denCoMar" value="{{$form_t5->selectT51->opcion}}"  placeholder="Introduzca nombres" maxlength="100" autofocus> 
         </div>
      
         <div class="col-md-4">
             <label for="nomFabri">NOMBRE DEL FABRICANTE</label>   
                <input type="text" class="form-control" name="nomFabri" id="nomFabri" value="{{$form_t5->selectT52->opcion}}"  placeholder="Introduzca nombres" maxlength="100" autofocus> 
            </div>
         </div>
      </div>
<!--FIN DEL PRIMER ROW DE INPUT-->

          <div class="row">
              <div class="col-md-12 form-group"><br>
                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                 <a href="{{ url('/registroT5') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
              </div>
          </div>
    </div>
   </form>
  </body>
 </html>