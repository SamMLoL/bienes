@extends('layouts.app')

@section('content')

 <div class="row">
    <div class="col-md-12">
        <div class="row separar">
            <div class="col-md-12">
              <center><h4><b>Datos de las Sedes y Similares del Órgano o Ente</b></h4></center>
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
                    <th id="letrasb" class="text-center">Código de Sede</th>
                    <th id="letrasb" class="text-center">Tipo de Sede</th>
                    <th id="letrasb" class="text-center">Descripción de Sede</th>
                    <th id="letrasb" class="text-center">localización</th>
                    <th id="letrasb" class="text-center">Código del País</th>
                    <th id="letrasb" class="text-center">Código de Parroquia</th>
                    <th id="letrasb" class="text-center">Código de Ciudad</th>
                    <th id="letrasb" class="text-center">Calle / Avenida</th>
                    <th id="letrasb" class="text-center">Casa / Edificio</th>
                    <th id="letrasb" class="text-center">Ver más</th>
                  </tr>
              </thead>
     
          <tbody style="font-size:12px;">
            @foreach($verS4 as $registro)
                
                @if($registro->codSede == '1') 
                  <tr>
                        @if($registro->revisadoS4 == '1')
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionSedes/{{$registro->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> xxx</b></a></td>
                        @else 
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionSedes/{{$registro->id}}"> xxx</a> </td>
                        @endif
                @else
                        @if($registro->revisadoS4 == '1')
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionSedes/{{$registro->id}}"><b>Nuevo <i class="fa fa-eye" aria-hidden="true"></i> {{$registro->codSede}}</b></a></td>
                        @else
                        <td class="text-center"><a href="#" hidden>{{$registro->id}}</a><a href="seleccionSedes/{{$registro->id}}">{{$registro->codSede}}</a></td>
                        @endif
                @endif

                     
                        <td class="text-center">{{$registro->tipoSede}}</td>
                     
                        
                        @if($registro->descSede == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->descSede}}</td>
                        @endif
                        
                        <td class="text-center">{{$registro->localizacion}}</td>

                      
                        <td class="text-center">{{$registro->codPais}}</td>
                    

                        @if($registro->codParroquia == '1093')
                        <td class="text-center">99</td>
                        @else
                        <td class="text-center">{{$registro->codParroquia}}</td>
                        @endif

                        @if($registro->codCiudad == '332')
                        <td class="text-center">99</td>
                        @else
                        <td class="text-center">{{$registro->codCiudad}}</td>
                        @endif

                        @if($registro->calleAvenida == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->calleAvenida}}</td>
                        @endif

                        @if($registro->casaEdificio == '1')
                        <td class="text-center">xxx</td>
                        @else
                        <td class="text-center">{{$registro->casaEdificio}}</td>
                        @endif

                  
                        <td class="text-center"><a href="seleccionSedes/{{$registro->id}}"><i style="color:#8E2121;" class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>
                       
                    </tr>
             
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
      
@endsection
