@extends('layouts.app')

@section('content')

 <div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12">
              <center><h4><b>Datos de los Componentes de los Bienes Muebles del Órgano o Ente</b></h4></center>
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
                    <th id="letrasb" class="text-center">Código interno del Bien</th>
                    <th id="letrasb" class="text-center">Código interno del componente</th>
                    <th id="letrasb" class="text-center">Serial del componente</th>
                    <th id="letrasb" class="text-center">Código del Tipo de componente</th>
                    <th id="letrasb" class="text-center">Código Marca del componente</th>
                    <th id="letrasb" class="text-center">Código Modelo del componente</th>
                    <th id="letrasb" class="text-center">Descripción del componente</th>
                    <th id="letrasb" class="text-center">Ver más</th>
                  </tr>
              </thead>
  
          <tbody style="font-size:12px;">
            @foreach($verT11 as $reg11)
              
                    <tr>
                        <!--SI EL revisadot1 ES 0 EL REGISTRO ES NUEVO SI NO , EL REGISTRO SE ABRIO-->
                      @if($reg11->revisadot11 == '1')
                        <td class="text-center"><a href="#" hidden>{{$reg11->id}}</a><b><a href="seleccionDatosbien/{{$reg11->id}}">Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$reg11->codBien}}</a></b></td>
                     
                      @else
                        <td class="text-center"><a href="#" hidden>{{$reg11->id}}</a><a href="seleccionDatosbien/{{$reg11->id}}">{{$reg11->codBien}}</a></td>
                      @endif

                        <td class="text-center">{{$reg11->codCompo}}</td>

                        @if($reg11->serialCompo == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg11->serialCompo}}</td>
                        @endif
                        
                        @if($reg11->codTipoCompo == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg11->codTipoCompo}}</td>
                        @endif

                        <td class="text-center">{{$reg11->selectMarcadatosb->codMarca}}</td>
                        <td class="text-center">{{$reg11->selectModeldatosb->codModel}}</td>
                        
                        @if($reg11->descCompo == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$reg11->descCompo}}</td>
                        @endif

                        <td class="text-center"><a href="seleccionDatosbien/{{$reg11->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                      
                    </tr>
               
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
      
@endsection
