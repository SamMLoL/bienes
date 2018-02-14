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
          
               @foreach($verT9 as $reg9)
                  
                  <tr>
                        @if($reg9->revisadot9== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg9->id}}</a><a href="seleccionEqtransporte/{{$reg9->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg9->codBien}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg9->id}}</a><a href="seleccionEqtransporte/{{$reg9->id}}"> {{$reg9->codBien}}</a> </td>
                        @endif
                        
                        @if($reg9->codCata == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg9->codCata}}</td>
                        @endif
                        
                        <td class="text-center">{{$reg9->selectDependenciatr->opcion}}</td>

                        @if($reg9->sedeOrgano == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg9->sedeOrgano}}</td>
                        @endif

                        @if($reg9->codRespAdm == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg9->codRespAdm}}</td>
                        @endif

                        @if($reg9->codResBien == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg9->codResBien}}</td>
                        @endif

                        @if($reg9->codInterno == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg9->codInterno}}</td>
                        @endif

                        <td class="text-center">{{$reg9->selectEstatustr->opcion}}</td>


                        <td class="text-center"><a href="seleccionEqtransporte/{{$reg9->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
