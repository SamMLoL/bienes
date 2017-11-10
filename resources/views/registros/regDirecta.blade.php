@extends('layouts.app')

@section('content')

  <div class="row separar">
    <div class="col-md-12 separar">
         
         <div class="row separar">
           <div class="col-md-12">
              <center><h4><b>Datos de los Origenes (Formas de Adquisición) de los Bienes Muebles e Inmuebles del Órgano o Ente</b></h4></center>
           </div>
         </div> 

         <div class="row text-center separar">
           <div class="col-md-12">
       <b>B) Aplicable solo para las formas de adquisición de compra por Consulta de Precios </b>
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
                       <td id="letrasb" class="text-center">Código del Proveedor</td>
                       <td id="letrasb" class="text-center">Número Orden Compra</td>
                       <td id="letrasb" class="text-center">Fecha Orden Compra</td>
                       <td id="letrasb" class="text-center">Número Nota Entrega</td>
                       <td id="letrasb" class="text-center">Fecha Nota Entrega</td>
                       <td id="letrasb" class="text-center">Ver más</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                @foreach($verT21 as $reg21)
                  @if($reg21->codOt2_1 == '0')
                    <tr>

                        @if($reg21->revisadot21 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg21->id}}</a><a href="seleccionDirecta/{{$reg21->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> B-1</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$reg21->id}}</a><a href="seleccionDirecta/{{$reg21->id}}"> B-1</a> </td>
                        @endif

                  @else   

                        @if($reg21->revisadot21 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg21->id}}</a><a href="seleccionDirecta/{{$reg21->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg21->codOt2_1}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$reg21->id}}</a><a href="seleccionDirecta/{{$reg21->id}}">{{$reg21->codOt2_1}}</a></td>
                        @endif

                  @endif

                        <td class="text-center">{{$reg21->selectDirecta->opcion}}</td>
                        
                        @if($reg21->codPro == '0')
                        <td class="text-center">XXX</td>
                        @else
                        <td class="text-center">{{$reg21->codPro}}</td>
                        @endif

                        @if($reg21->numCom == '0')
                        <td class="text-center">XXX</td>
                        @else
                        <td class="text-center">{{$reg21->numCom}}</td>
                        @endif
                      <!--OJO REVISAR 10 DE AGOSTO ESTAN GUARDADANDO 9 VECES EL NUMERO 1 EN LOS CAMPOS DATE REVISAR TABLAS--> 
                        @if($reg21->feCom == '1111-11-11')
                        <td class="text-center">11111111</td>
                        @else
                        <td class="text-center">{{$reg21->feCom}}</td>
                        @endif

                        @if($reg21->numNota == '0')
                        <td class="text-center">XXX</td>
                        @else
                        <td class="text-center">{{$reg21->numNota}}</td>
                        @endif

                        @if($reg21->feNota == '1111-11-11')
                        <td class="text-center">11111111</td>
                        @else
                        <td class="text-center">{{$reg21->feNota}}</td>
                        @endif

                        <td class="text-center"><a href="seleccionDirecta/{{$reg21->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                  </tr>     
                @endforeach
           </tbody>
        </table>
    </div>
  </div>
@endsection
