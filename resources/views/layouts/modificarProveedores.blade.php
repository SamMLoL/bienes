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
                   <div class="panel-heading text-center"><h5><b>MODIFICAR PROVEEDORES <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t1->id}}</b></h4>
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

    <form role="form" method="POST" action="{{route('proveedores.update', $form_t1->id)}}">
        <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

            <div class="row separar">
                <div class="col-md-12">
                    <div class="col-md-4">
                       <label for="codProvee">Código del Proveedor</label>
                          <input type="text" class="form-control" name="codProvee" id="codProvee" value="{{$form_t1->codProvee}}"  placeholder="Introduzca nombres" maxlength="30" disabled> 
                    </div>
               
                    <div class="col-md-4">
                       <label for="descProvee">Descripción del Proveedor</label>   
                          <input type="text" class="form-control" name="descProvee" id="descProvee" value="{{$form_t1->descProvee}}"  placeholder="Introduzca nombres" maxlength="100" autofocus> 
                    </div>
              
                    <div class="pull-right col-md-4 form-group">
                      <label for="tipProvee">Tipo de Proveedor</label>
                         <select name="tipProvee" id="tipProvee" class="form-control">
                              <option value="{{$form_t1->selectProvee->id}}">{{$form_t1->selectProvee->opcion}}</option>
                            @foreach($sel_proveedores as $form)
                              <option value="{{$form->id}}">{{$form->opcion}}</option> 
                            @endforeach
                         </select>
                    </div>
                </div>
            </div>
<!--FIN DEL PRIMER ROW DE INPUT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                      <label for="rifProvee">RIF</label>   
                       <input type="text" class="form-control" name="rifProvee" id="rifProvee" value="{{$form_t1->rifProvee}}"  placeholder="Introduzca nombres" maxlength="30"> 
                    </div>

                    <div class="col-md-4 separar">
                      <label for="otraDesc">Otra Descripción</label>

                     @if($form_t1->otraDesc == '0')
                      <input type="text" class="form-control" name="otraDesc" id="otraDesc" value="xxx"  placeholder="Introduzca nombres" maxlength="200">
                    </div>

                    @else
                    <input type="text" class="form-control" name="otraDesc" id="otraDesc" value="{{$form_t1->otraDesc}}"  placeholder="Introduzca otra descripción" maxlength="200">
                </div> 
            </div>
                    @endif

<!--FIN DEL SEGUNDO ROW DE INPUT-->
              <div class="row">
                  <div class="col-md-12 form-group"><br>
                    <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
                     <a href="{{ url('/regProveedores') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
                  </div>
              </div>
        </div>
    </div>
</div>
</form>
</body>
</html>