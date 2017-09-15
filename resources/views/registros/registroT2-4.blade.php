@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>Registro de Anexo T-2-4</b></h4></center>
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
              
                <thead style="font-size:12px;">
                    <tr>
                       <td id="letrasb" class="text-center">Código Origen</td>
                       <td id="letrasb" class="text-center">Código Adquisición</td>
                       <td id="letrasb" class="text-center">Nombre Donante</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Número Contrato o Acta</td>
                       <td id="letrasb" class="text-center">Fecha Contrato Acta</td>
                       <td id="letrasb" class="text-center">Nombre Registro o Notaría</td>
                       <td id="letrasb" class="text-center">Tomo</td>
                       <td id="letrasb" class="text-center">Folio</td>
                       <td id="letrasb" class="text-center">Fecha Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT24 as $reg24)

                @if($reg24->codOt2_4 == '0') 
                  <tr>
                        @if($reg24->revisadot24== '1')
                        <td><a href="seleccion24/{{$reg24->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> E-1</b></a></td>
                        @else 
                        <td><a href="seleccion24/{{$reg24->id}}"> E-1</a> </td>
                        @endif
                @else
                        @if($reg24->revisadot24 == '1')
                        <td><a href="seleccion24/{{$reg24->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg24->codOt2_4}}</b></a></td>
                        @else
                        <td><a href="seleccion24/{{$reg24->id}}">{{$reg24->codOt2_4}}</a></td>
                        @endif
                @endif

                        <td>{{$reg24->selectT24->opcion}}</td>

                       @if($reg24->nomDona == '1')
                        <td>XXX</td>
                       @else
                        <td>{{$reg24->nomDona}}</td>
                       @endif

                       @if($reg24->nomBen == '1')
                        <td>noaplica</td>
                       @else
                        <td>{{$reg24->nomBen}}</td>
                       @endif

                       @if($reg24->numConac == '0')
                        <td>XXX</td>
                       @else
                        <td>{{$reg24->numConac}}</td>
                       @endif

                       @if($reg24->feConac == '1111-11-11')
                        <td>11111111</td>
                       @else
                        <td>{{$reg24->feConac}}</td>
                       @endif

                       @if($reg24->nomRegn == '1')
                        <td>XXX</td>
                       @else
                        <td>{{$reg24->nomRegn}}</td>
                       @endif

                       @if($reg24->tomo == '1')
                        <td>XXX</td>
                       @else
                        <td>{{$reg24->tomo}}</td>
                       @endif

                       @if($reg24->folio == '0')
                        <td>99</td>
                       @else
                        <td>{{$reg24->folio}}</td>
                       @endif

                        @if($reg24->feReg == '1111-11-11')
                        <td>11111111</td>
                       @else
                        <td>{{$reg24->feReg}}</td>
                       @endif
                        <td class="text-center"><a href="seleccion24/{{$reg24->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
@endsection
