@extends('layouts.app')

@section('content')

<div class="row">
      <div class="col-md-12">

          <div class="row separar">
              <div class="col-md-12 separar">
                 <center><h4><b>Datos de los Responsable de los Bienes Muebles e Inmuebles del Órgano o Ente</b></h4></center>
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
              
                <thead style="font-size:11px;">
                    <tr>
                       <td id="letrasb" class="text-center">Código Responsable</td>
                       <td id="letrasb" class="text-center">Tipo Responsable</td>
                       <td id="letrasb" class="text-center">Cédula Identidad</td>
                       <td id="letrasb" class="text-center">Nombre Responsable</td>
                       <td id="letrasb" class="text-center">Apellido Responsable</td>
                       <td id="letrasb" class="text-center">Cargo Responsable</td>
                       <td id="letrasb" class="text-center">Dependencia Administrativa</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot3 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT4 as $reg4)

                @if($reg4->codResp == '0') 
                  <tr>
                        @if($reg4->revisadot4== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg4->id}}</a><a href="seleccionResponsables/{{$reg4->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg4->codResp}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg4->id}}</a><a href="seleccionResponsables/{{$reg4->id}}"> {{$reg4->codResp}}</a> </td>
                        @endif
                @else
                        @if($reg4->revisadot4 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg4->id}}</a><a href="seleccionResponsables/{{$reg4->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg4->codResp}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg4->id}}</a><a href="seleccionResponsables/{{$reg4->id}}">{{$reg4->codResp}}</a></td>
                        @endif
                @endif
                        <td class="text-center">{{$reg4->selectResponsables->opcion}}</td>
                        <td class="text-center">{{$reg4->cedula}}</td>
                        <td class="text-center">{{$reg4->nomRes}}</td>
                        <td class="text-center">{{$reg4->apeRes}}</td>
                        <td class="text-center">{{$reg4->cargoRes}}</td>
                        <td class="text-center">{{$reg4->selectUnidad->codigo}}</td>
                        <td class="text-center"><a href="seleccionResponsables/{{$reg4->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>

                  </tr>     
              @endforeach
           </tbody>
        </table>
    </div>
</div>
@endsection
