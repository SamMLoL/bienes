
    // PROVEEDORES = Anexo T1
    $('#tipProvee').change(function(){
        var id = $('#tipProvee').val();
        if(id != 2){
           $("#otraDesc").attr("disabled", true).prop($('#otraDesc').val('xxx'));

        }else{
            $("#otraDesc").attr("disabled", false).prop($('#otraDesc').val(''));
        }
    })

     //SEGUROS = ANEXOS T3
     $("#tipoCobe").change(function(){
       var id = $("#tipoCobe").val();
       if(id != 3){
          $("#espeCobe").attr("disabled", true).prop($('#espeCobe').val('noaplica'));
       }else{
          $("#espeCobe").attr("disabled", false).prop($('#espeCobe').val(''));
    
        }
    })

     $("#compAse").change(function(){
       var id = $("#compAse").val();
       if(id != 54){
          $("#otraCom").attr("disabled", true).prop($('#otraCom').val('noaplica'));
       }else{
          $("#otraCom").attr("disabled", false).prop($('#otraCom').val(''));
    
        }
    })

    //ANEXOS BIENES , TRANSPORTE , SEMOVIENTES , INMUEBLES
    // moneda y espeMoneda js presente en las siguientes visBienes = Anexo T8 
    // visTransporte = Anexo T9 visSemovientes = Anexo T10 , visInmuebles = Anexo T12
    $("#moneda").change(function(){
      var id = $("#moneda").val();
        if(id != 4){
          $("#espeMoneda").attr("disabled", true).prop($('#espeMoneda').val('noaplica'));
       }else{
          $("#espeMoneda").attr("disabled", false).prop($('#espeMoneda').val(''));
    
        }
    })

    //ANEXOS BIENES , TRANSPORTE , SEMOVIENTES , INMUEBLES
    //estatuBien y espOtroUso |edoBien y espOtroEdo js presente en las siguientes visBienes = Anexo T8 , visTransporte = Anexo T9 , 
    //visSemovientes = Anexo T10 , visInmuebles = Anexos T12
    $("#estatuBien").change(function(){
        var id = $("#estatuBien").val();
        if(id != 11){
          $("#espOtroUso").attr("disabled", true).prop($('#espOtroUso').val('noaplica'));
        }else{
          $("#espOtroUso").attr("disabled", false).prop($('#espOtroUso').val(''));
    
      }
    })

    //ANEXOS BIENES , TRANSPORTE , SEMOVIENTES , INMUEBLES
    //edoBien y espOtroEdo | js presente en las siguientes visBienes = Anexo T8 , visTransporte = Anexo T9 , 
    //visSemovientes = Anexo T10 , visInmuebles = Anexos T12
    $("#edoBien").change(function(){
        var id = $("#edoBien").val();
        if(id != 7){
      $("#espOtroEdo").attr("disabled", true).prop($('#espOtroEdo').val('noaplica'));
        }else{
      $("#espOtroEdo").attr("disabled", false).prop($('#espOtroEdo').val(''));
    
        }
    })

  //ANEXOS BIENES , TRANSPORTE , SEMOVIENTES 
  //codColorBien y espeColor | js presente en las siguientes visBienes = Anexo T8 , visTransporte = Anexo T9 , 
  //visSemovientes = Anexo T10 
 
    $("#codColorBien").change(function(){
      var id = $("#codColorBien").val();
        if(id != 37){
      $("#espeColor").attr("disabled", true).prop($('#espeColor').val('noaplica'));
        }else{
      $("#espeColor").attr("disabled", false).prop($('#espeColor').val(''));
    
        }
    })


//ANEXO TRANSPORTE

  
    $("#claseBien").change(function(){
      var id = $("#claseBien").val();
        if(id != 4){
      $("#espeClase").attr("disabled", true).prop($('#espeClase').val('noaplica'));
       }else{
      $("#espeClase").attr("disabled", false).prop($('#espeClase').val(''));
    
        }
    })


//ANEXO SEMOVIENTES


    $("#tipoAnimal").change(function(){
       var id = $("#tipoAnimal").val();
       if(id != 8){
          $("#espeOtroTipo").attr("disabled", true).prop($('#espeOtroTipo').val('noaplica'));
       }else{
          $("#espeOtroTipo").attr("disabled", false).prop($('#espeOtroTipo').val(''));
    
        }
    })


      $("#proposito").change(function(){
        var id = $("#proposito").val();
        if(id != 7){
          $("#espeOtroPro").attr("disabled", true).prop($('#espeOtroPro').val('noaplica'));
        }else{
          $("#espeOtroPro").attr("disabled", false).prop($('#espeOtroPro').val(''));
    
       }
    })


//ANEXO INMUEBLES


      $("#usoBienInmu").change(function(){
        var id = $("#usoBienInmu").val();
        if(id != 7){
          $("#otroUsoInmu").attr("disabled", true).prop($('#otroUsoInmu').val('noaplica'));
        }else{
          $("#otroUsoInmu").attr("disabled", false).prop($('#otroUsoInmu').val(''));
    
        }
    })


      $("#unidadConstru").change(function(){
        var id = $("#unidadConstru").val();
        if(id != 18){
          $("#espeOtraUnidad").attr("disabled", true).prop($('#espeOtraUnidad').val('noaplica'));
        }else{
          $("#espeOtraUnidad").attr("disabled", false).prop($('#espeOtraUnidad').val(''));
    
        }
    })


      $("#unidadTerreno").change(function(){
      var id = $("#unidadTerreno").val();
        if(id != 18){
      $("#espeOtraTerre").attr("disabled", true).prop($('#espeOtraTerre').val('noaplica'));
        }else{
      $("#espeOtraTerre").attr("disabled", false).prop($('#espeOtraTerre').val(''));
    
        }
    })

    $("#localizacion3").change(function(event){

      var id = $("#localizacion3").val();
        var s4Parro3 = $('#s4Parro3').val();
          var s4Ciudad3 = $('#s4Ciudad3').val();
            var s4Pais3 = $('#s4Pais3').val();
        if(id == 1){
        
          $.get(s4Parro3+'/'+event.target.value+"",function(response,parroquia){
             $("#codParroquia3").empty();
                $("#codParroquia3").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<1093; i++){
                  $("#codParroquia3").append("<option value='"+response[i].id+ "'> "+response[i].parroquia+"</option>");
        }

            })

          
          $.get(s4Ciudad3+'/'+event.target.value+"",function(response,ciudad){
             $("#codCiudad3").empty();
                $("#codCiudad3").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<331; i++){
                  $("#codCiudad3").append("<option value='"+response[i].id+ "'> "+response[i].ciudad+"</option>");
        }

            })

              $("#codPais3").empty().append("<option value='230'>Venezuela </option>");
              $("#espeOtroPais").attr("disabled", true).append($('#espeOtroPais').val('noaplica'));
              $("#espeOtroCiudad").attr("disabled", true).append($('#espeOtroCiudad').val('noaplica'));
              /*$("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));*/
              $("#codParroquia3").attr("disabled", false);
              $("#codCiudad3").attr("disabled", false);
            
              //$("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
             
       
          }else{

            
             $.get(s4Pais3+'/'+event.target.value+"",function(response,pais){
              $("#codPais3").empty();
                $("#codPais3").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<response.length; i++){
                  $("#codPais3").append("<option value='"+response[i].id+ "'> "+response[i].pais+"</option>");
        }

            })
            
              /*$("#codPais").empty().append("<option value='2'>Otro País </option>");*/

              $("#codParroquia3").attr("disabled", false);
              $("#codParroquia3").empty().append("<option value='1094'>99 </option>");
              $("#codCiudad3").attr("disabled", false);
              $("#codCiudad3").empty().append("<option value='332'>99 </option>");
              
             
            }

      })
  

