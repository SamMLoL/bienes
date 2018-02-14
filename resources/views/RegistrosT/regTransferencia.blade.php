@extends('layouts.app')

@section('content')

<div class="row">
      <div class="col-md-12">
          <div class="row separar">
              <div class="col-md-12">
                 <center><h4><b>Datos de los Origenes (Formas de Adquisición) de los Bienes Muebles e Inmuebles del Órgano o Ente</b></h4></center>
              </div>
          </div>

          <div class="row separar text-center">
              <div class="col-md-12">
                 <h7><b>H) Aplicable solo para la forma de adquisición de Transferencia</b></h7>
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
              
                <thead style="font-size:12px;">
                    <tr>
                       <td id="letrasb" class="text-center">Código Origen</td>
                       <td id="letrasb" class="text-center">Código Adquisición</td>
                       <td id="letrasb" class="text-center">Nombre quien transfiere</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Número Autorización</td>
                       <td id="letrasb" class="text-center">Fecha  Autorización</td>
                       <td id="letrasb" class="text-center">Nombre Registro Notaría</td>
                       <td id="letrasb" class="text-center">Fecha de Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT27 as $reg27)

                @if($reg27->codOt2_7 == '0') 
                  <tr>
                        @if($reg27->revisadot27== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg27->id}}</a><a href="seleccionTransferencia/{{$reg27->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp; H-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg27->id}}</a><a href="seleccionTransferencia/{{$reg27->id}}">&nbsp; H-1</a> </td>
                        @endif
                @else
                        @if($reg27->revisadot27 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg27->id}}</a><a href="seleccionTransferencia/{{$reg27->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg27->codOt2_7}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg27->id}}</a><a href="seleccionTransferencia/{{$reg27->id}}">{{$reg27->codOt2_7}}</a></td>
                        @endif
                @endif
                       
                       @if($reg27->codAdq == '1')
                        <td class="text-center">5</td>
                       @endif

                       @if($reg27->nomQtra == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg27->nomQtra}}</td>
                       @endif

                       @if($reg27->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg27->nomBen}}</td>
                       @endif

                       @if($reg27->numAuto == '0')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg27->numAuto}}</td>
                       @endif

                       @if($reg27->feAuto == '1111-11-11')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg27->feAuto}}</td>
                       @endif

                       @if($reg27->nomRegn == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg27->nomRegn}}</td>
                       @endif

                       @if($reg27->feReg == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg27->feReg}}</td>
                       @endif
                      
                        <td class="text-center"><a href="seleccionTransferencia/{{$reg27->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
    </div>
</div>
@endsection
