@extends('layouts.app')

@section('content')

    <div class="row separar">
        <div class="col-md-12 separar">
          <center><h4><b>Registro de Anexo T-1</b></h4></center>
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
  <!-- 
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">Información del Registro</div>
            <div class="panel-body">
  PENDIENTE REALIZAR A CADA ANEXO UN INPUT PARA IDENTIFICAR QUIEN ES LA PERSONA QUE REALIZA EL REGISTRO Y LA FECHA EN EL CUAL SE REALIZO DICHO REGISTRO , TAMBIÉN ANEXAR LA VALIDACIÓN DE USUARIO PARA AUTENTICARLO EN CASO DE QUE NO SEA EL DUEÑO DEL REGISTRO
            
          </div>
        </div>
      </div>
    </div>-->

    <div class="row">
      <div class="col-md-12">
        <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">
             
              <thead style="font-size:13px;">
                  <tr>
                    <td id="letrasb" class="text-center">Código Proveedor</td>
                    <td id="letrasb" class="text-center">Descripción Proveedor</td>
                    <td id="letrasb" class="text-center">Tipo Proveedor</td>
                    <td id="letrasb" class="text-center">Rif</td>
                    <td id="letrasb" class="text-center">Otra Descripción</td>
                    <td id="letrasb" class="text-center">Ver más</td>
                  </tr>
              </thead>

          <tbody style="font-size:13px;">
            @foreach($verT1 as $registro)
                @if($registro->otr_descr_t1 == '0')
                    <tr>
                        <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                      @if($registro->revisadot1 == '1')
                        <td class="text-center"><b><a href="seleccion/{{$registro->id}}">Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->cod_proveedor_t1}}</a></b></td>
                     
                      @else
                        <td class="text-center"><a href="seleccion/{{$registro->id}}">{{$registro->cod_proveedor_t1}}</a></td>
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
      
@endsection
