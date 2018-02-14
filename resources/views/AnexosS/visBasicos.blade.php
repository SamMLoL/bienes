@extends('layouts.app')

@section('content')

<!--MODIFICAR LOS ROW Y LOS COLD DE LAS VISTAS TABLAS , REGISTRO, MUESTRA Y MODIFICAR ALL-->
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> BÁSICOS / DATOS BÁSICOS DEL ORGAO O ENTE .</b></h5></div>
        </div>
            
        <div class="row">
            <div class="col-md-12">
               <h6> <i id="colorInstruccion" class="fa fa-info-circle" aria-hidden="true" title="" ></i>  
                <b id="colorInstruccion"> INSTRUCCIONES: EL CAMPO QUE DESCONOZCA, POR FAVOR DEJARLO EN BLANCO. SEGÚN EL MANUAL DE ESPECIFICACIONES TÉCNICAS.</b></h6>
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-12 li moverIzq">
                <ul class="js-errors li"></ul>
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

        <div class="row separar">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"> <b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código del Sigecof</b>
              <b id="espaciarS">
              @if($lastCod)
                {{$lastCod->codSigecof}}
              @else
                RGBP
              @endif
              </b></li></li>
            </div>
        </div>
    <hr>

      <form role="form" id="formValidaS1" name="formValidaS1" method="POST" action="{{url('basicos')}}">
           {{ csrf_field() }}

      <!--ARRAY DE INPUT PERTENECIENTE AL CONTROLADORS1 -->
    
      <div class="row separar">
        <div class="col-md-12">

        @foreach($codSige as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$codSige[$posicion][0]}}">{{$codSige[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$codSige[$posicion][0]}}" id="{{$codSige[$posicion][0]}}" placeholder="{{$codSige[$posicion][2]}}" maxlength="{{$codSige[$posicion][3]}}" >

          </div>
        @endforeach

        @foreach($siglas as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$siglas[$posicion][0]}}">{{$siglas[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$siglas[$posicion][0]}}" id="{{$siglas[$posicion][0]}}" placeholder="{{$siglas[$posicion][2]}}" maxlength="{{$siglas[$posicion][3]}}" >

          </div>
        @endforeach

        @foreach($grupo as $posicion => $valor)
             <div class="col-md-1 form-group ">
                <label for="{{$grupo[$posicion][0]}}"></label>
                   <select name="{{$grupo[$posicion][0]}}" id="{{$grupo[$posicion][0]}}" class="form-control">
                      <option value="1" >{{$grupo[$posicion][4]}}</option>
                      <option value="2" >{{$grupo[$posicion][5]}}</option>
                      <option value="3" >{{$grupo[$posicion][6]}}</option>
                   </select>
             </div>
          @endforeach

        @foreach($rif as $posicion => $valor)
             
          <div class="col-md-3 form-group ">
            
             <label for="{{$rif[$posicion][0]}}">{{$rif[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$rif[$posicion][0]}}" id="{{$rif[$posicion][0]}}" placeholder="{{$rif[$posicion][2]}}" maxlength="{{$rif[$posicion][3]}}" >

          </div>
        @endforeach

        </div>
      </div>

      <div class="row col-md-offset-1 separar">
        <div class="col-md-12">
          @foreach($razonSo as $posicion => $valor)
             
          <div class="col-md-10 form-estilo ">
            
             <label for="{{$razonSo[$posicion][0]}}">{{$razonSo[$posicion][1]}}</label>
          
             <textarea name="{{$razonSo[$posicion][0]}}" id="{{$razonSo[$posicion][0]}}" class="form-control" placeholder="{{$razonSo[$posicion][2]}}" maxlength="{{$razonSo[$posicion][3]}}" rows="{{$razonSo[$posicion][4]}}"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="basicos">0/255</div> </div>

          </div>
        @endforeach
        </div>
      </div>

      <div class="row separar">
        <div class="col-md-12">
        @foreach($telefono as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$telefono[$posicion][0]}}">{{$telefono[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$telefono[$posicion][0]}}" id="{{$telefono[$posicion][0]}}" placeholder="{{$telefono[$posicion][2]}}" maxlength="{{$telefono[$posicion][3]}}" onkeypress="{{$telefono[$posicion][4]}}">

          </div>
        @endforeach

        @foreach($direcWeb as $posicion => $valor)
             
          <div class="col-md-4 form-group ">
            
             <label for="{{$direcWeb[$posicion][0]}}">{{$direcWeb[$posicion][1]}}</label>
          
             <input type="text" class="form-control" name="{{$direcWeb[$posicion][0]}}" id="{{$direcWeb[$posicion][0]}}" placeholder="{{$direcWeb[$posicion][2]}}" maxlength="{{$direcWeb[$posicion][3]}}">

          </div>
        @endforeach

        @foreach($correEnte as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$correEnte[$posicion][0]}}">{{$correEnte[$posicion][1]}}</label>
                  <input type="text" name="{{$correEnte[$posicion][0]}}" id="{{$correEnte[$posicion][0]}}" class="form-control" placeholder="{{$correEnte[$posicion][2]}}" maxlength="{{$correEnte[$posicion][3]}}">
          </div>
        @endforeach
        </div>
      </div>

      <div class="row separar">
        <div class="col-md-12">
          <div class="col-md-4 form-group">
            <label for="{{$fechaGaceta[$posicion][0]}}">{{$fechaGaceta[$posicion][1]}}</label>  
                <div class="{{$fechaGaceta[$posicion][3]}}">

                <span class="{{$fechaGaceta[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$fechaGaceta[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$fechaGaceta[$posicion][0]}}" id="{{$fechaGaceta[$posicion][0]}}" placeholder="{{$fechaGaceta[$posicion][2]}}" aria-describedby="{{$fechaGaceta[$posicion][5]}}">
                          
                </div>
         </div>

         @foreach($numeroGaceta as $posicion => $valor)
      
          <div class="col-md-4 form-group separar">
                <label for="{{$numeroGaceta[$posicion][0]}}">{{$numeroGaceta[$posicion][1]}}</label>
                  <input type="text" name="{{$numeroGaceta[$posicion][0]}}" id="{{$numeroGaceta[$posicion][0]}}" class="form-control" placeholder="{{$numeroGaceta[$posicion][2]}}" maxlength="{{$numeroGaceta[$posicion][3]}}">
          </div>
        @endforeach
        </div>
      </div>
    

            <div class="row">
                <div class="col-md-12 form-group" ><br>
                           
                  <center><button type="submit" class="btn btn-md btn-success" name="#" title="Guardar Registro"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                          
                  <a href="{{url('home')}}" class="btn btn-md btn-danger" title="Salir" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><b>Salir</b></a></center>  

                </div>
            </div>
      </form>
   </div>
</div>

@endsection
