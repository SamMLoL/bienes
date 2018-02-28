
@extends('layouts.app')

@section('content')

<div class="row">
      <div class="col-md-12">
          <div class="row">
              <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> AÑADIR PAÍSES </b></h5></div>
          </div>
      
          <div class="row desvanecer">
            <div class="col-md-12">
            @if(session()->has('msj'))
                <center><div  class="col-md-12  alert alert-success" role="alert">{{session('msj')}}</div></center>
                   @endif

                   @if(session()->has('errormsj'))
                <center><div  class="col-md-12  alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
            @endif
             </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 170px;"  class="listas"> <center>Ultimo Registro</center>
              <li style="border-style: ridge; background-color: white; width: 170px;"  class="listas"> <center> Código del País</center>
              
              @if($lastCod)
               <center id="color" >{{$lastCod->codigo}}</center>
              @else
               <center id="color" > 000 </center> 
              @endif
              </li></li>
            </div>
        </div>

    <hr>
        
          <div class="row"> 
             <div class="col-md-12 li moverIzq">
                 <ul class="js-errors li"></ul>
             </div>
          </div>


    <form role="form" id="formValidaAddPais" name="formValidaAddPais" method="POST" action="{{url('pais')}}">
      {{ csrf_field() }}
  
    <div class="row col-md-offset-3 separar40">
    	<div class="col-md-12">
		    @foreach($array as $posicion => $valor)
		    
		          <div class="col-md-4  form-group separar">
		              <label for="{{$array[$posicion][0]}}">{{$array[$posicion][1]}}</label>
		                <input type="text" class="form-control" name="{{$array[$posicion][0]}}" id="{{$array[$posicion][0]}}" placeholder="{{$array[$posicion][2]}}" maxlength="{{$array[$posicion][3]}}" >
		          </div>
		    @endforeach
        </div>
	</div>
           <div class="row">
                <div class="col-md-12 form-group" ><br>
                    <center>
                    	
                        <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>

                        <a href="{{url('/histoPaises')}}"  class="btn btn-md btn-danger" ><i class="fa fa-archive" aria-hidden="true"></i> <b>Consultar</b></a>

                        <a href="{{url('/home')}}"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <b>Salir</b></a>

                    </center> 
                </div>
           </div>
       </form>
   </div>
</div>
      
@endsection
