@extends('layouts.app')

@section('content')


    <div class="row">
        <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b>ANEXO T-1 / DATOS DE LOS PROVEEDORES DE LOS BIENES PÚBLICOS DEL ÓRGANO O ENTE</b></h5></div>
    </div>
    
    <div class="row">
      <div class="col-md-12 separar">
        <h6> <i id="colorInstruccion" class="fa fa-info-circle" aria-hidden="true" title="" ></i>  
         <b id="colorInstruccion"> INSTRUCCIONES: EL CAMPO QUE DESCONOZCA, POR FAVOR DEJARLO EN BLANCO.</b></h6>
      </div>
    </div>

      <div class="row">
        <div class="col-md-12 desvanecer">
        @if(session()->has('msj'))
            <center><div  class="col-md-12  alert alert-success" role="alert">{{session('msj')}}</div></center>
               @endif

               @if(session()->has('errormsj'))
            <center><div  class="col-md-12  alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
        @endif
        </div>
      </div>

      <form role="form" id="formValidaT1" name="formValidaT1" method="POST" action="{{url('t1')}}">
           {{ csrf_field() }}

      <!--ARRAY DE SELECT PERTENECIENTE AL CONTROLADORT1 LA TABLA RELACIONADA EN LA BD => mig_selectT1-->
      <!--ARRAY OF SELECT BELONGING TO CONTROLADORT1 THE RELATED TABLE IN THE BD => mig_selectT1-->

        <div class="row">
         @foreach($selectt1 as $posicion => $valor)
             <div class="col-md-4 form-group {{$selectt1[$posicion][4]}}">
                <label for="{{$selectt1[$posicion][0]}}">{{$selectt1[$posicion][1]}}</label>
                   <select name="{{$selectt1[$posicion][0]}}" id="{{$selectt1[$posicion][0]}}" class="form-control">
                      <option value="0" disabled selected>Seleccione</option>

                   @foreach($migselectT1 as $select)
                      <option value="{{$select->id}}">{{$select->opcion}}</option> 
            
                   @endforeach
                   </select>
             </div>
          @endforeach

       <!--ARRAY DE INPUT-TEXT PERTENECIENTE AL CONTROLADORT1 LA TABLA RELACIONADA EN LA BD => T1-->
       <!--ARRAY OF INPUT-TEXT BELONGING TO CONTROLADORT1 THE RELATED TABLE IN THE BD => T1--> 

          @foreach($arrayt1 as $posicion => $valor)

        <div class="col-md-4 form-group {{$arrayt1[$posicion][4]}}">
          
           <label for="{{$arrayt1[$posicion][0]}}">{{$arrayt1[$posicion][1]}}</label>
        
           <input type="text" class="form-control" name="{{$arrayt1[$posicion][0]}}" id="{{$arrayt1[$posicion][0]}}" placeholder="{{$arrayt1[$posicion][2]}}" maxlength="{{$arrayt1[$posicion][3]}}" >

        </div> 

          @endforeach
      </div>
        
         <!--FINAL DEL ROW | FOREACH DE LA TABLA t1dpbpoe | controladorT1-->
         <!--FINAL OF THE ROW | FOREACH OF THE TABLE t1dpbpoe | controllerT1 -->
           
            <div class="row">
                <div class="col-md-12 form-group" ><br>
                           
                  <center><button type="submit" class="btn btn-lg btn-success" name="#" title="Guardar Registro"><i class="fa fa-check-square-o" aria-hidden="true"></i> Guardar Registro</button>
                          
                  <a href="{{url('home')}}" class="btn btn-lg btn-danger" title="Salir" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a></center>  

                </div>
            </div>
      </form>
@endsection
