@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12 separar">
               <center><h4><b>Datos de los Bienes Muebles del Órgano o Ente</b></h4></center>
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
                       <td id="letrasb" class="text-center">Código del Origen del Bien</td>
                       <td id="letrasb" class="text-center">Código según Catalogo</td>
                       <td id="letrasb" class="text-center">Dependencia Administrativa</td>
                       <td id="letrasb" class="text-center">Sede del Ente</td>
                       <td id="letrasb" class="text-center">Código del Responsable Administrativo</td>
                       <td id="letrasb" class="text-center">Código del Responsable del Bien </td>
                       <td id="letrasb" class="text-center">Código Interno del Bien</td>
                       <td id="letrasb" class="text-center">Estatus del uso del Bien</td>
                       <td id="letrasb" class="text-center">Fecha de Nacimiento</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:11px;">
          
               @foreach($verT10 as $reg10)
                  
                  <tr>
                        @if($reg10->revisadot10== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg10->id}}</a><a href="seleccionSemovientes/{{$reg10->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg10->codBien}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg10->id}}</a><a href="seleccionSemovientes/{{$reg10->id}}"> {{$reg10->codBien}}</a> </td>
                        @endif
                        
                        @if($reg10->codCata == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg10->codCata}}</td>
                        @endif
                        
                        <td class="text-center">{{$reg10->selectDependenciasemo->opcion}}</td>

                        @if($reg10->sedeOrgano == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg10->sedeOrgano}}</td>
                        @endif

                        @if($reg10->codRespAdm == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg10->codRespAdm}}</td>
                        @endif

                        @if($reg10->codResBien == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg10->codResBien}}</td>
                        @endif

                        @if($reg10->codInterno == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg10->codInterno}}</td>
                        @endif

                        <td class="text-center">{{$reg10->selectEstatusemo->opcion}}</td>
                        
                        @if($reg10->feNacimiento == '1111-11-11')
                        <td class="text-center">11111111</td>
                        @else
                        <td class="text-center">{{$reg10->feNacimiento}}</td>
                        @endif

                        <td class="text-center"><a href="seleccionSemovientes/{{$reg10->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
