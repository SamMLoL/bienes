@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>Registro de Anexo T-2-3</b></h4></center>
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
                       <td id="letrasb" class="text-center">Nombre Cedente</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Número Finiquito</td>
                       <td id="letrasb" class="text-center">Nombre Registro Notaría</td>
                       <td id="letrasb" class="text-center">Tomo</td>
                       <td id="letrasb" class="text-center">Folio</td>
                       <td id="letrasb" class="text-center">Fecha Finiquito</td>
                       <td id="letrasb" class="text-center">Fecha Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT23 as $reg23)

                @if($reg23->codOt2_3 == '0') 
                  <tr>
                        @if($reg23->revisadot23 == '1')
                        <td class="text-center"><a href="seleccion23/{{$reg23->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> D-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="seleccion23/{{$reg23->id}}"> D-1</a> </td>
                        @endif
                @else
                        @if($reg23->revisadot23 == '1')
                        <td class="text-center"><a href="seleccion23/{{$reg23->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg23->codOt2_3}}</b></a></td>
                        @else
                        <td class="text-center"><a href="seleccion23/{{$reg23->id}}">{{$reg23->codOt2_3}}</a></td>
                        @endif
                @endif

                        <td class="text-center">{{$reg23->selectT23->opcion}}</td>

                       @if($reg23->nomCed == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg23->nomCed}}</td>
                       @endif

                       @if($reg23->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg23->nomBen}}</td>
                       @endif

                       @if($reg23->numFin == '0')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg23->numFin}}</td>
                       @endif

                       @if($reg23->nomRegn == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg23->nomRegn}}</td>
                       @endif

                       @if($reg23->tomo == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg23->tomo}}</td>
                       @endif

                       @if($reg23->folio == '0')
                        <td class="text-center">99</td>
                       @else
                        <td class="text-center">{{$reg23->folio}}</td>
                       @endif

                       @if($reg23->feFin == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg23->feFin}}</td>
                       @endif

                        @if($reg23->feReg == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg23->feReg}}</td>
                       @endif
                        
                        <td class="text-center"><a href="seleccion23/{{$reg23->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
@endsection
