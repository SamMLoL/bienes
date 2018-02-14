<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Modificar Proveedores</title>

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  </head>
<body>

<div class="container" id="sha">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel">
                     <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                   <div class="panel-heading text-center"><h5><b>MODIFICAR MODELOS <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t6->id}}</b></h4>
                </div>
            </div>
            
          <hr>

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

    <form role="form" method="POST" action="{{route('modelos.update', $form_t6->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="codModel">Código del Modelo</label>
                          <input type="text" class="form-control" name="codModel" id="codModel" value="{{$form_t6->codModel}}"  placeholder="Introduzca nombres" maxlength="10" disabled> 
                    </div>
               
                    <div class="col-md-4">
                       <label for="denModFab">Denominación del Modelo Según el Fabricante</label> 
                          <input type="text" class="form-control" name="denModFab" id="denModFab" value="{{$form_t6->denModFab}}" maxlength="100">
                    </div>
              
                    <div class="pull-right col-md-4 form-group">
                      <label for="codMarca">Código de la Marca</label>
                         <select name="codMarca" id="codMarca" class="form-control">
                              <option value="{{$form_t6->selectMarca->id}}">{{$form_t6->selectMarca->codMarca}}</option>
                            @foreach($infoSelect as $form)
                              @if($form->id != $form_t6->selectMarca->id)
                              <option value="{{$form->id}}">{{$form->codMarca}}</option> 
                              @endif
                            @endforeach
                         </select>
                    </div>
                </div>
            </div>
<!--FIN DEL PRIMER ROW DE INPUT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                      <label for="codSegModel">Código del Bien Mueble Según Catalogo</label>   
                       <input type="text" class="form-control" name="codSegModel" id="codSegModel" value="{{$form_t6->codSegModel}}" maxlength="10"> 
                    </div>
                </div>
            </div>
                   
<!--FIN DEL SEGUNDO ROW DE INPUT-->
              <div class="row">
                  <div class="col-md-12 form-group"><br>
                    <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                     <a href="{{ url('/histoModelos') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
                  </div>
              </div>
        </div>
    </div>
</div>
</form>
</body>
</html>