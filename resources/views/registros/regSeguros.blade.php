@extends('layouts.app')

@section('content')

  <div class="row">
      <div class="col-md-12">
          <div class="row separar40">
              <div class="col-md-12">
                 <center><h4><b>Datos del Seguro de los Bienes Muebles e Inmuebles del Órgano o Ente</b></h4></center>
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
                       <td id="letrasb" class="text-center">Código Registro</td>
                       <td id="letrasb" class="text-center">Compañía aseguradora</td>
                       <td id="letrasb" class="text-center">Otra Compañía aseguradora</td>
                       <td id="letrasb" class="text-center">Número Póliza</td>
                       <td id="letrasb" class="text-center">Tipo Póliza</td>
                       <td id="letrasb" class="text-center">Monto asegurado</td>
                       <td id="letrasb" class="text-center">Moneda</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                      
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot3 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT3 as $reg3)

                @if($reg3->codRegT3 == '0') 
                  <tr>
                        @if($reg3->revisadot3== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg3->id}}</a><a href="seleccionSeguros/{{$reg3->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg3->codRegT3}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg3->id}}</a><a href="seleccionSeguros/{{$reg3->id}}"> {{$reg3->codRegT3}}</a> </td>
                        @endif
                @else
                        @if($reg3->revisadot3 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg3->id}}</a><a href="seleccionSeguros/{{$reg3->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg3->codRegT3}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg3->id}}</a><a href="seleccionSeguros/{{$reg3->id}}">{{$reg3->codRegT3}}</a></td>
                        @endif
                @endif

                        <td class="text-center">{{$reg3->selectSeguros->opcion}}</td>

                       @if($reg3->otraCom == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg3->otraCom}}</td>
                       @endif

                       @if($reg3->numPoli == '0')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg3->numPoli}}</td>
                       @endif
                      
                        <td class="text-center">{{$reg3->selectSeguros1->opcion}}</td>

                  
                       @if($reg3->montoAse == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg3->montoAse}}</td>
                       @endif

                       <td class="text-center">{{$reg3->selectSeguros2->opcion}}</td>

                       <td class="text-center"><a href="seleccionSeguros/{{$reg3->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>

                  </tr>     
              @endforeach
           </tbody>
        </table>
    </div>
</div>
@endsection
