@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">

      <div class="row separar">
          <div class="col-md-12">
              <center><h4><b>Datos de los Origenes (Formas de Adquisición) de los Bienes Muebles e Inmuebles del Órgano o Ente</b></h4></center>
          </div>
      </div> 

      <div class="row text-center separar">
          <div class="col-md-12">
              <b>E) Aplicable solo para la forma de adquisición de Donación</b>
          </div>
      </div>
    <hr>
        
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
                       <td id="letrasb" class="text-center">Nombre Donante</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Número Contrato o Acta</td>
                       <td id="letrasb" class="text-center">Fecha Contrato Acta</td>
                       <td id="letrasb" class="text-center">Nombre Registro o Notaría</td>
                       <td id="letrasb" class="text-center">Fecha de Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT24 as $reg24)

                @if($reg24->codOt2_4 == '0') 
                  <tr>
                        @if($reg24->revisadot24== '1')
                        <td class="text-center"><a href="#" hidden>{{$reg24->id}}</a><a href="seleccionDonacion/{{$reg24->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> E-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg24->id}}</a><a href="seleccionDonacion/{{$reg24->id}}"> E-1</a> </td>
                        @endif
                @else
                        @if($reg24->revisadot24 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg24->id}}</a><a href="seleccionDonacion/{{$reg24->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg24->codOt2_4}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg24->id}}</a><a href="seleccionDonacion/{{$reg24->id}}">{{$reg24->codOt2_4}}</a></td>
                        @endif
                @endif
                      
                       @if($reg24->codAdq == '1')
                        <td class="text-center">4</td>
                       @endif

                       @if($reg24->nomDona == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg24->nomDona}}</td>
                       @endif

                       @if($reg24->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg24->nomBen}}</td>
                       @endif

                       @if($reg24->numConac == '0')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg24->numConac}}</td>
                       @endif

                       @if($reg24->feConac == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg24->feConac}}</td>
                       @endif

                       @if($reg24->nomRegn == '1')
                        <td class="text-center">xxx</td>
                       @else
                        <td class="text-center">{{$reg24->nomRegn}}</td>
                       @endif

                       @if($reg24->feReg == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg24->feReg}}</td>
                       @endif

                        <td class="text-center"><a href="seleccionDonacion/{{$reg24->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
    </div>
</div>
@endsection
