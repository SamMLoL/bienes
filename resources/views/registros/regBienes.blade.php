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
                       <td id="letrasb" class="text-center">Sede del Órgano o ente</td>
                       <td id="letrasb" class="text-center">Código del Responsable Administrativo</td>
                       <td id="letrasb" class="text-center">Código del Responsable del Bien </td>
                       <td id="letrasb" class="text-center">Código Interno del Bien</td>
                       <td id="letrasb" class="text-center">Estatus del uso del Bien</td>
                       <!--<td id="letrasb" class="text-center">Fecha Registro</td>-->
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:11px;">
          
               @foreach($verT8 as $reg8)
                  
                  <tr>
                        @if($reg8->revisadot8== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg8->id}}</a><a href="seleccionBienes/{{$reg8->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg8->codOt2_1}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg8->id}}</a><a href="seleccionBienes/{{$reg8->id}}"> {{$reg8->codOt2_1}}</a> </td>
                        @endif
                        
                        @if($reg8->codCata == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg8->codCata}}</td>
                        @endif
                        
                        <td class="text-center">{{$reg8->selectDependencia->opcion}}</td>

                        @if($reg8->sedeOrgano == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg8->sedeOrgano}}</td>
                        @endif

                        @if($reg8->codRespAdm == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg8->codRespAdm}}</td>
                        @endif

                        @if($reg8->codResBien == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg8->codResBien}}</td>
                        @endif

                        @if($reg8->codInterno == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg8->codInterno}}</td>
                        @endif

                        <td class="text-center">{{$reg8->selectEstatus->opcion}}</td>


                        <td class="text-center"><a href="seleccionBienes/{{$reg8->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
