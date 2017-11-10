@extends('layouts.app')

@section('content')

  <div class="row">
     <div class="col-md-12">
        <div class="row separar">
           <div class="col-md-12">
              <center><h4><b>Datos de los Origenes (Formas De Adquisición) de Los Bienes Muebles e Inmuebles del Órgano o Ente</b></h4></center>
           </div>
        </div> 

        <div class="row text-center separar">
           <div class="col-md-12">
              <b>C) Aplicable solo para las formas de adquisición de confiscación </b>
           </div>
        </div>
    
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
              
                <thead style="font-size:13px;">
                    <tr>
                       <td id="letrasb" class="text-center">Código Origen</td>
                       <td id="letrasb" class="text-center">Código Adquisición</td>
                       <td id="letrasb" class="text-center">Nombre propietario anterior</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Nombre Autoridad</td>
                       <td id="letrasb" class="text-center">Número Setencia Confiscación</td>
                       <td id="letrasb" class="text-center">Nombre Registro Notaría</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
            @foreach($verT22 as $reg22)

                @if($reg22->codOt2_2 == '0') 
                  <tr>
                        @if($reg22->revisadot22 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg22->id}}</a><a href="seleccionConfiscacion/{{$reg22->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> C-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg22->id}}</a><a href="seleccionConfiscacion/{{$reg22->id}}"> C-1</a> </td>
                        @endif
                @else
                        @if($reg22->revisadot22 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg22->id}}</a><a href="seleccionConfiscacion/{{$reg22->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg22->codOt2_2}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg22->id}}</a><a href="seleccionConfiscacion/{{$reg22->id}}">{{$reg22->codOt2_2}}</a></td>
                        @endif
                @endif

                        <td class="text-center">{{$reg22->selectConfiscacion->opcion}}</td>

                       @if($reg22->nomPa == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg22->nomPa}}</td>
                       @endif

                       @if($reg22->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg22->nomBen}}</td>
                       @endif

                       @if($reg22->nomAuto == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center" >{{$reg22->nomAuto}}</td>
                       @endif

                       @if($reg22->numSenc == '0')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg22->numSenc}}</td>
                       @endif

                       @if($reg22->nomRegno == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg22->nomRegno}}</td>
                       @endif

                        <td class="text-center"><a href="seleccionConfiscacion/{{$reg22->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
    </div>
  </div>
@endsection
