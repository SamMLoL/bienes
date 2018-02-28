@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12">
              <center><h4><b>Añadir Parroquia</b> <i id='color' class="fa fa-plus-circle"></i></h4></center>
            </div>
        </div>
    <hr>
        <div class="row">
            <div class="col-md-12 desvanecer">
            @if(session()->has('msj'))
                <center><div  class="col-md-12 alert alert-success" role="alert">{{session('msj')}}</div></center>
                   @endif

                   @if(session()->has('errormsj'))
                <center><div  class="col-md-12 alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
            @endif
            </div>
        </div>    

         <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">

                <thead>
                    <tr>
                       <td id="letrasb" class="text-center">Código de la Parroquia</td>
                       <td id="letrasb" class="text-center">Nombre de la Parroquia</td>
                       <td id="letrasb" class="text-center">Fecha y Hora del Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>
            <tbody>
          
                @foreach($verParro as $im)
                  @if($im->codigo == '0') 
                  <tr>
                        @if($im->revisadoAddParro == '1')
                        <td class="text-center"><a href="#" hidden>{{$im->id}}</a><a href="seleccionParroquia/{{$im->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$im->codigo}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$im->id}}</a><a href="seleccionParroquia/{{$im->id}}"> {{$im->codigo}}</a></td>
                        @endif
                  @else
                        @if($im->revisadoAddParro == '1')
                        <td class="text-center"><a href="#" hidden>{{$im->id}}</a><a href="seleccionParroquia/{{$im->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$im->codigo}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$im->id}}</a><a href="seleccionParroquia/{{$im->id}}"> {{$im->codigo}}</a></td>
                        @endif
                  @endif

                      <td class="text-center">{{$im->parroquia}} </td>
                      <td class="text-center">{{$im->created_at->format('d/m/Y - h:i A')}}</td>
                      <td class="text-center"><a href="seleccionParroquia/{{$im->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
    </div>
</div>

@endsection