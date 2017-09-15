@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>Registro de Anexo T-2-5</b></h4></center>
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
                       <td id="letrasb" class="text-center">Nombre propietario</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Nombre Autoridad</td>
                       <td id="letrasb" class="text-center">Número Sentencia o Acto</td>
                       <td id="letrasb" class="text-center">Nombre Registro o Notaría</td>
                       <td id="letrasb" class="text-center">Tomo</td>
                       <td id="letrasb" class="text-center">Folio</td>
                       <td id="letrasb" class="text-center">Fecha Sentencia o Acto</td>
                       <td id="letrasb" class="text-center">Fecha Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT25 as $reg25)

                @if($reg25->codOt2_5 == '0') 
                  <tr>
                        @if($reg25->revisadot25== '1')
                        <td class="text-center"><a href="seleccion25/{{$reg25->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> F-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="seleccion25/{{$reg25->id}}"> F-1</a> </td>
                        @endif
                @else
                        @if($reg25->revisadot25 == '1')
                        <td class="text-center"><a href="seleccion25/{{$reg25->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg25->codOt2_5}}</b></a></td>
                        @else
                        <td class="text-center"><a href="seleccion25/{{$reg25->id}}">{{$reg25->codOt2_5}}</a></td>
                        @endif
                @endif

                        <td class="text-center">{{$reg25->selectT25->opcion}}</td>

                       @if($reg25->nomPan == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg25->nomPan}}</td>
                       @endif

                       @if($reg25->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg25->nomBen}}</td>
                       @endif

                       @if($reg25->nomAut == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg25->nomAut}}</td>
                       @endif

                       @if($reg25->numSena == '0')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg25->numSena}}</td>
                       @endif

                       @if($reg25->nomRegn == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg25->nomRegn}}</td>
                       @endif

                       @if($reg25->tomo == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg25->tomo}}</td>
                       @endif

                       @if($reg25->folio == '0')
                        <td class="text-center">99</td>
                       @else
                        <td class="text-center">{{$reg25->folio}}</td>
                       @endif

                       @if($reg25->feSena == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg25->feSena}}</td>
                       @endif

                        @if($reg25->feReg == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg25->feReg}}</td>
                       @endif
                      
                        <td class="text-center"><a href="seleccion25/{{$reg25->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
@endsection
