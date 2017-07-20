@extends('layouts.app')
@section('content')

<div class="container" id="sha">
  
  <div class="row">
        <div class="panel-heading text-center separar"><h5><b>DATOS DE LOS RESPONSABLES DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
  </div>

  <div class="row">
    

         @foreach($arrayt4 as $posicion => $valor)
         
         <div class="col-md-4 form-group">
           <label for="{{$arrayt4[$posicion][0]}}">{{$arrayt4[$posicion][1]}}</label>

           <input type="text" class="form-control" name="{{$arrayt4[$posicion][0]}}" id="{{$arrayt4[$posicion][0]}}" placeholder="{{$arrayt4[$posicion][2]}}">

         </div>


         @endforeach
  </div>




  </div>
  <!--FIN DEL CONTAINER-->
</div>

@endsection