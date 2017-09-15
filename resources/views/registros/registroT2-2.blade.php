@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>Registro de Anexo T-2-2</b></h4></center>
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
    
    <div class="row">
      <div class="col-md-12">
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
                       <td id="letrasb" class="text-center">Tomo</td>
                       <td id="letrasb" class="text-center">Folio</td>
                       <td id="letrasb" class="text-center">Fecha Setencia Deconfiscación</td>
                       <td id="letrasb" class="text-center">Fecha Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
            @foreach($verT22 as $reg22)

                @if($reg22->codOt2_2 == '0') 
                  <tr>
                        @if($reg22->revisadot22 == '1')
                        <td class="text-center"><a href="seleccion22/{{$reg22->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> C-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="seleccion22/{{$reg22->id}}"> C-1</a> </td>
                        @endif
                @else
                        @if($reg22->revisadot22 == '1')
                        <td class="text-center"><a href="seleccion22/{{$reg22->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg22->codOt2_2}}</b></a></td>
                        @else
                        <td class="text-center"><a href="seleccion22/{{$reg22->id}}">{{$reg22->codOt2_2}}</a></td>
                        @endif
                @endif

                        <td class="text-center">{{$reg22->selectT22->opcion}}</td>

                       @if($reg22->nomPa == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg22->nomPa}}</td>
                       @endif

                       @if($reg22->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg22->nomBen}}</td>
                       @endif

                       @if($reg22->nomAuto == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center" >{{$reg22->nomAuto}}</td>
                       @endif

                       @if($reg22->numSenc == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg22->numSenc}}</td>
                       @endif

                       @if($reg22->nomRegno == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg22->nomRegno}}</td>
                       @endif

                       @if($reg22->tomo == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg22->tomo}}</td>
                       @endif

                       @if($reg22->folio == '0')
                        <td class="text-center">99</td>
                       @else
                        <td class="text-center">{{$reg22->folio}}</td>
                       @endif

                       @if($reg22->feSenc == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg22->feSenc}}</td>
                       @endif

                        @if($reg22->feReg == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg22->feReg}}</td>
                       @endif
                        <td class="text-center"><a href="seleccion22/{{$reg22->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
@endsection
