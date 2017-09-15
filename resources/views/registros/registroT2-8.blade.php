@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>REGISTRO DE TABLA ANEXO T-2-6</b></h4></center>
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
                       <td id="letrasb" class="text-center">Nombre propietario anterior</td>
                       <td id="letrasb" class="text-center">Nombre Beneficiario</td>
                       <td id="letrasb" class="text-center">Nombre Autoridad</td>
                       <td id="letrasb" class="text-center">Número Sentencia o Acto</td>
                       <td id="letrasb" class="text-center">Fecha  Sentencia o Acto</td>
                       <td id="letrasb" class="text-center">Nombre Registro Notaría</td>
                       <td id="letrasb" class="text-center">Tomo</td>
                       <td id="letrasb" class="text-center">Folio</td>
                       <td id="letrasb" class="text-center">Fecha Registro</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
        @foreach($verT28 as $reg28)

                @if($reg28->codOt2_8 == '0') 
                  <tr>
                        @if($reg28->revisadot28== '1')
                        <td class="text-center"><a href="seleccion28/{{$reg28->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> I-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="seleccion28/{{$reg28->id}}"> I-1</a> </td>
                        @endif
                @else
                        @if($reg28->revisadot28 == '1')
                        <td class="text-center"><a href="seleccion28/{{$reg28->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg28->codOt2_8}}</b></a></td>
                        @else
                        <td class="text-center"><a href="seleccion28/{{$reg28->id}}">{{$reg28->codOt2_8}}</a></td>
                        @endif
                @endif

                        <td class="text-center">{{$reg28->selectT28->opcion}}</td>

                       @if($reg28->nomProan == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg28->nomProan}}</td>
                       @endif

                       @if($reg28->nomBen == '1')
                        <td class="text-center">noaplica</td>
                       @else
                        <td class="text-center">{{$reg28->nomBen}}</td>
                       @endif

                       @if($reg28->nomAuto == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg28->nomAuto}}</td>
                       @endif

                       @if($reg28->numSeAdm == '0')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg28->numSeAdm}}</td>
                       @endif

                       @if($reg28->feSeAdm == '1111-11-11')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg28->feSeAdm}}</td>
                       @endif

                       @if($reg28->nomRegn == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg28->nomRegn}}</td>
                       @endif

                       @if($reg28->tomo == '1')
                        <td class="text-center">XXX</td>
                       @else
                        <td class="text-center">{{$reg28->tomo}}</td>
                       @endif

                       @if($reg28->folio == '0')
                        <td class="text-center">99</td>
                       @else
                        <td class="text-center">{{$reg28->folio}}</td>
                       @endif

                       @if($reg28->feReg == '1111-11-11')
                        <td class="text-center">11111111</td>
                       @else
                        <td class="text-center">{{$reg28->feReg}}</td>
                       @endif
                      
                        <td class="text-center"><a href="seleccion28/{{$reg28->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
@endsection
