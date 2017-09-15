@extends('layouts.app')

@section('content')

  <div class="row separar">
      <div class="col-md-12 separar">
         <center><h4><b>REGISTRO DE TABLA ANEXO T-5</b></h4></center>
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
    
   <!--<div class="row">
      <div class="col-md-12">
        Responsable del registro -> {{ $_SESSION['nombre'] }}
      </div>
    </div>-->

    <div class="row">
      <div class="col-md-12">
        <table id="tablaT1" class="tabla table-striped table-responsive table-bordered table-hover">
              
                <thead style="font-size:11px;">
                    <tr>
                       <td id="letrasb" class="text-center">Código de la Marca</td>
                       <td id="letrasb" class="text-center">Denominación Comercial de la Marca</td>
                       <td id="letrasb" class="text-center">Nombre del Fabricante</td>
                       <td id="letrasb" class="text-center">Fecha de Registro</td>
                    </tr>
                </thead>

            <tbody style="font-size:12px;">
          
                <!--SI EL revisadot5 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
              @foreach($verT5 as $reg5)

                  <tr> 
                        @if($reg5->revisadot5== '1')
                        <td class="text-center"><a href="seleccion5/{{$reg5->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg5->selectT5->opcion}}</b></a></td>
                        @else 
                        <td class="text-center"><a href="seleccion5/{{$reg5->id}}"> {{$reg5->selectT5->opcion}}</a> </td>
                        @endif

                        <td class="text-center">{{$reg5->selectT51->opcion}}</td>
                        <td class="text-center">{{$reg5->selectT52->opcion}}</td>
                        <td class="text-center">{{$reg5->created_at->format('d-m-Y')}}</td>
                  </tr>     
              @endforeach
           </tbody>
        </table>
@endsection
