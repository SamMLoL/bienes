@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12 separar">
               <center><h4><b>Datos de los Origenes (Formas de Adquisición) de los Bienes Muebles e Inmuebles del Órgano o Ente</b></h4></center>
            </div>
        </div>

        <div class="row separar">
            <div class="col-md-12">
              <h7><b>G) Aplicable solo para la forma de adquisición de Permuta</b></h7>
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
                       <td id="letrasb" class="text-center">Código Origen</td>
                       <td id="letrasb" class="text-center">Código Adquisición</td>
                       <td id="letrasb" class="text-center">Nombre Copermutante</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Nombre Licitación</td>
                       <td id="letrasb" class="text-center">Número Licitación</td>
                       <td id="letrasb" class="text-center">Fecha  Licitación</td>
                       <!--<td id="letrasb" class="text-center">Fecha Registro</td>-->
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:11px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->

        @foreach($verT26 as $reg26)

                @if($reg26->codOt2_6 == '0') 
                  <tr>
                        @if($reg26->revisadot26== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg26->id}}</a><a href="seleccionPermuta/{{$reg26->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> G-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg26->id}}</a><a href="seleccionPermuta/{{$reg26->id}}"> G-1</a> </td>
                        @endif
                @else
                        @if($reg26->revisadot26 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg26->id}}</a><a href="seleccionPermuta/{{$reg26->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg26->codOt2_6}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg26->id}}</a><a href="seleccionPermuta/{{$reg26->id}}">{{$reg26->codOt2_6}}</a></td>
                        @endif
                @endif
                       
                       @if($reg26->codAdq == '1')
                        <td class="text-center">2</td>
                       @endif

                       @if($reg26->nomCope == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg26->nomCope}}</td>
                       @endif

                       @if($reg26->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg26->nomBen}}</td>
                       @endif

                       @if($reg26->nomLic == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg26->nomLic}}</td>
                       @endif

                       @if($reg26->numLic == '0')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg26->numLic}}</td>
                       @endif

                       @if($reg26->feLic == '1111-11-11')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg26->feLic}}</td>
                       @endif

                        <td class="text-center"><a href="seleccionPermuta/{{$reg26->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
