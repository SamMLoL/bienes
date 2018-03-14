@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12 separar">
               <center><h4><b>Datos de los Bienes Inmuebles del Órgano o Ente</b></h4></center>
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
                       <td id="letrasb" class="text-center">Código Según Catalogo</td>
                       <td id="letrasb" class="text-center">Dependencia Administrativa</td>
                       <td id="letrasb" class="text-center">Código del Responsable Administrativo</td>
                       <td id="letrasb" class="text-center">Corresponde el Bien Inmueble a alguna Sede</td>
                       <td id="letrasb" class="text-center">Código Sede del Ente donde Corresponde el Bien</td>
                       <td id="letrasb" class="text-center">Estatus del Uso del Bien</td>
                       <td id="letrasb" class="text-center">Localización</td>
                       <!--<td id="letrasb" class="text-center">Fecha Registro</td>-->
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:11px;">
          
               @foreach($verT12 as $reg12)
                  <tr>
                        @if($reg12->revisadot12 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg12->id}}</a><a href="seleccionInmuebles/{{$reg12->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg12->codBien}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg12->id}}</a><a href="seleccionInmuebles/{{$reg12->id}}"> {{$reg12->codBien}}</a> </td>
                        @endif
                        
                        @if($reg12->codCata == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg12->codCata}}</td>
                        @endif
                        
                        <td class="text-center">{{$reg12->selectDepeninmueble->opcion}}</td>

                        @if($reg12->codRespAdm == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg12->codRespAdm}}</td>
                        @endif
                        
                        <td class="text-center">{{$reg12->selectCorresinmu->opcion}}</td>

                        @if($reg12->codSede == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg12->codSede}}</td>
                        @endif

                        <td class="text-center">{{$reg12->selectEstatuinmu->opcion}}</td>
                        
                        <td class="text-center">{{$reg12->selectLocalinmu->opcion}}</td>

                        <td class="text-center"><a href="seleccionInmuebles/{{$reg12->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
