@extends('layouts.app')

@section('content')


    <div class="row">
        <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b>REGISTRO DE MARCA</b></h5></div>
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

      <div class="row"> 
       <div class="col-md-12 li separar moverIzq">
          <ul class="js-errors li"></ul>
       </div>
    </div>

<div class="row">
   <div class="col-md-12">
      <form role="form" id="formValidaAña" name="formValidaAña" method="POST" action="{{url('tMarca')}}">
      {{ csrf_field() }}

        
    @foreach($array as $posicion => $valor)
    
         <div class="col-md-4  form-group separar">
           <label for="{{$array[$posicion][0]}}">{{$array[$posicion][1]}}</label>
                <input type="text" class="form-control" name="{{$array[$posicion][0]}}" id="{{$array[$posicion][0]}}" placeholder="{{$array[$posicion][2]}}" maxlength="{{$array[$posicion][3]}}" >
         </div>
    @endforeach




        <div class="row">
              <div class="col-md-12 form-group" ><br>
                  <center>
                      <button type="submit" class="btn btn-lg btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Añadir</button>
                               
                      <a href="home"  class="btn btn-lg btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                  </center> 
              </div>
          </div>

      </form>
   </div>
</div>
      
@endsection
