@extends('layouts.app')

@section('content')

              <div class="row">
                  <div class="col-md-12">
                      <center><h5 for=""><b id="colorletra">DATOS DE LOS PROVEEDORES DE LOS BIENES PÚBLICOS DEL ÓRGANO O ENTE</b></h5></center>
                  </div>
              </div>
        <form role="form" class="form-horizontal" id="formValidaT1" name="formValidaT1" method="POST" >
          {{ csrf_field() }}

            <div class="row">
       
                  @foreach($arrayt1 = $posicion => $valor)

            <div class="col-md-4 form-group"><br>

              <label for="{{$arrayt1[$posicion][0]}}">{{$arrayt1[$posicion][1]}}</label><br>

                <input type="text" name="{{$arrayt1[$posicion][0]}}" id="{{$arrayt1[$posicion][0]}}" class="form-control" placeholder="{{$arrayt1[$posicion][2]}}">
            </div>
                
                  @endforeach
            </div>
          
                  <div class="row">
                      <div class="col-md-12" ><br>
                         <div class="form-group">
                           <center>
                           <button class="btn btn-danger">Hola</button>
                     
                           
                           <a href="home"  class="btn btn-lg btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                           </center> 
                       </div>
                     </div>
                  </div>
      
         </form>
</div>

@endsection
