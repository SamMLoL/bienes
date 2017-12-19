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
             <b>A) Aplicable solo para las formas de adquisición de compra por Concurso Abierto o Concurso Cerrado</b>
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
                           <th id="letrasb" class="text-center">Código Origen</th>
                           <th id="letrasb" class="text-center">Código Adquisición</th>
                           <th id="letrasb" class="text-center">Nombre Concurso</th>
                           <th id="letrasb" class="text-center">Número Concurso</th>
                           <th id="letrasb" class="text-center">Fecha Concurso</th>
                           <th id="letrasb" class="text-center">Código Proveedor</th>
                           <th id="letrasb" class="text-center">Número Contrato</th>
                           <th id="letrasb" class="text-center">Ver más</th>
                        </tr>
                    </thead>

                <tbody style="font-size:12px;">
                  @foreach($verT2 as $registro2)
                    <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                      @if($registro2->codOrigen == '0')
                        <tr>
                            @if($registro2->revisadot2 == '1')
                              <td class="text-center"><a href="#" hidden>{{$registro2->id}}</a><a href="seleccionConcurso/{{$registro2->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> A-1</b></a></td>
                            @else
                              <td class="text-center"><a href="#" hidden>{{$registro2->id}}</a><a href="seleccionConcurso/{{$registro2->id}}"> A-1</a></td>

                            @endif
                            
                      @else

                            @if($registro2->revisadot2 == '1')
                               <td class="text-center"><a href="#" hidden>{{$registro2->id}}</a><a href="seleccionConcurso/{{$registro2->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro2->codOrigen}}</b></a></td>
                            @else
                               <td class="text-center"><a href="#" hidden>{{$registro2->id}}</a><a href="seleccionConcurso/{{$registro2->id}}"> {{$registro2->codOrigen}}</a></td>
                            @endif

                      @endif
                            
                            @if($registro2->codAdquisicion == '1')
                               <td class="text-center">8</td>
                            @else
                               <td class="text-center">9</td>
                            @endif

                            @if($registro2->nomConcurso == '1')
                               <td class="text-center">xxx</td>
                            @else
                               <td class="text-center">{{$registro2->nomConcurso}}</td>
                            @endif

                            @if($registro2->numConcurso == '0')
                               <td class="text-center">xxx</td>
                            @else
                               <td class="text-center">{{$registro2->numConcurso}}</td>
                            @endif

                            @if($registro2->feConcurso == '1111-11-11')
                               <td class="text-center">11111111</td>
                            @else
                               <td class="text-center">{{$registro2->feConcurso}}</td>
                            @endif

                            @if($registro2->codProveedor == '0')
                               <td class="text-center">xxx</td>
                            @else
                               <td class="text-center">{{$registro2->codProveedor}}</td>
                            @endif 

                            @if($registro2->numContrato == '0')
                               <td class="text-center">xxx</td>
                            @else
                               <td class="text-center">{{$registro2->numContrato}}</td>
                            @endif 
                             
                               <td class="text-center"><a href="seleccionConcurso/{{$registro2->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                        </tr>
                  @endforeach
               </tbody>
           </table>
         
     </div>
  </div>
@endsection
