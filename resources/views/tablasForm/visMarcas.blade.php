@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="panel-heading text-center separar"><h5><b><i class="fa fa-file-o" aria-hidden="true"></i> MARCAS / DATOS DE LAS MARCAS DE LOS BIENES MUEBLES DEL ORGANO O ENTE</b></h5></div>
      </div>

  <div class="row">
      <div class="col-md-12 desvanecer">
        @if(session()->has('msj'))
          <center><div  class="col-md-12  alert alert-success" >{{session('msj')}}</div></center>
            @endif

            @if(session()->has('errormsj'))
          <center><div  class="col-md-12  alert alert-danger" >{{session('errormsj')}}</div></center>
        @endif
    </div>

  <div class="row"> 
      <div class="col-md-12 li separar moverIzq">
          <ul class="js-errors li"></ul>
      </div>
  </div>

<div class="row separar40">
    <div class="col-md-12">
        <div class="col-md-4">
           <a href="{{ url('/marcaAdd') }}" class="btn btn-info btn-sm">
              <b>Añadir Nueva Marca </b><i class="fa fa-plus-circle" aria-hidden="true"></i>
           </a>
        </div>
    </div>
</div>

<div class="row">
   <div class="col-md-12">
      <form role="form" id="formValidaT5" name="formValidaT5" method="POST" action="{{url('regmarcas')}}">
      {{ csrf_field() }}
        

                  <div class="form-estilo col-sm-4  ">
                    <li for="sel_dir"><b>Denominación de la Marca:</b></li>
                     <select name="codMarca" id="codMarca" class="form-control">
                       <option value="0" disabled selected>Seleccione</option>

                       @foreach($infoSelect as $traeDir)
                      <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                     @endforeach
                    </select>
                  </div> 

                  <div class="form-estilo col-sm-4">
                    <li for="denCoMar"><b>Código de la Marca:</b></li>
                      <select name="denCoMar" disabled id="denCoMar" class="form-control">
                    </select>
                  </div> 

                  <div class="form-estilo col-sm-4">
                    <li for="nomFabri"><b>Nombre de Fabricante:</b></li>
                      <select name="nomFabri" disabled id="nomFabri" class="form-control">
                    </select>
                  </div> 

    
        <div class="row">
            <div class="col-md-12 form-group" ><br>
                <center>
                    <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                             
                    <a href="home"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><b> Salir</b></a>  
                </center> 
            </div>
        </div>
     </form> 
   </div>  
</div>

@endsection
