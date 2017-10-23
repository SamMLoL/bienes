@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    
        <div class="row">
            <div class="col-md-12">
              <center><h4><b>Datos de los Proveedores de los Bienes Públicos del Órgano o Ente</b></h4></center>
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
                    <th id="letrasb" class="text-center">Código Proveedor</th>
                    <th id="letrasb" class="text-center">Descripción Proveedor</th>
                    <th id="letrasb" class="text-center">Tipo Proveedor</th>
                    <th id="letrasb" class="text-center">Rif</th>
                    <th id="letrasb" class="text-center">Otra Descripción</th>
                    <th id="letrasb" class="text-center">Ver más</th>
                  </tr>
              </thead>
     
          <tbody style="font-size:12px;">
            @foreach($verT1 as $registro)
                @if($registro->otr_descr_t1 == '0')
                    <tr>
                        <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                      @if($registro->revisadot1 == '1')
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><b><a href="seleccion/{{$registro->id}}">Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->cod_proveedor_t1}}</a></b></td>
                     
                      @else
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccion/{{$registro->id}}">{{$registro->cod_proveedor_t1}}</a></td>
                      @endif

                        <td class="text-center">{{$registro->desc_prove_t1}}</td>
                        <td class="text-center">{{$registro->selectT1->opcion}}</td>
                        <td class="text-center">{{$registro->t1_rif}}</td>
                        <td class="text-center">XXX</td>
                        <td class="text-center"><a href="seleccion/{{$registro->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                      
                    </tr>
                @else
                    <tr>

                      @if($registro->revisadot1 == '1')
                        <td class="text-center"><a href="seleccion/{{$registro->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->cod_proveedor_t1}}</b></a></td>

                      @else
                        <td class="text-center"><a href="seleccion/{{$registro->id}}">{{$registro->cod_proveedor_t1}}</a></td>
                      @endif

                        <td class="text-center">{{$registro->desc_prove_t1}}</td>
                        <td class="text-center">{{$registro->selectT1->opcion}}</td>
                        <td class="text-center">{{$registro->t1_rif}}</td>
                        <td class="text-center">{{$registro->otr_descr_t1}}</td>
                        <td class="text-center"><a href="seleccion/{{$registro->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                       

                    </tr>
                @endif
            @endforeach
          </tbody>
        </table>
  </div>
</div>
      
@endsection
