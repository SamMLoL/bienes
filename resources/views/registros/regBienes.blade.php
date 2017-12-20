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
                       <td id="letrasb" class="text-center">Código del Responsable</td>
                       <td id="letrasb" class="text-center">Código interno del Bien</td>
                       <td id="letrasb" class="text-center">Estatus del uso del Bien</td>
                       <!--<td id="letrasb" class="text-center">Fecha Registro</td>-->
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:11px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO

               @foreach($verT8 as $reg8)

                @if($reg8->codOt2_6 == '0') 
                  <tr>
                        @if($reg8->revisadot8== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg8->id}}</a><a href="seleccionBienes/{{$reg8->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> G-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg8->id}}</a><a href="seleccionBienes/{{$reg8->id}}"> G-1</a> </td>
                        @endif
                @else
                        @if($reg8->revisadot8 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg8->id}}</a><a href="seleccionBienes/{{$reg8->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg8->codOt2_6}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg8->id}}</a><a href="seleccionBienes/{{$reg8->id}}">{{$reg8->codOt2_6}}</a></td>
                        @endif
                @endif
                       
                       

                        <td class="text-center"><a href="seleccionBienes/{{$reg8->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach-->
            </tbody>
        </table>
    </div>
</div>
@endsection
