

//REGISTRAR SEDES = S4
//ANEXO S4


    $("#espeSede").attr("disabled", true);
      $("#tipoSede").change(function(){
      var id = $("#tipoSede").val();
        if(id != 8){
      $("#espeSede").attr("disabled", true).prop($('#espeSede').val('noaplica'));
        }else{
      $("#espeSede").attr("disabled", false).prop($('#espeSede').val(''));
    
       }
    })


/*SELECT LOCALIZACIÓN Y SELECT si se selecciona nacional te trae venezuela si se selecciona internacional te trae otro país CODIGO DE PARROQUIA PARA CUANDO SELECCIONE INTERNACIONAL SE COLOQUE 99 EN CASO CONTRARIO TRAIGA LAS OPCIONES DEL OPTION(SELECT)*/  
/*
    $("#localizacion").change(function(){
      var id = $("#localizacion").val();
        if(id != 2){
          $.get("bienes/s4/",function(response,parroquia){
             $("#codParroquia").empty();
                $("#codParroquia").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<response.length; i++){
                  $("#codParroquia").append("<option value='"+response[i].id+ "'> "+response[i].parroquia+"</option>");
      }
          

          })

            $("#codPais").empty().append("<option value='1'>Venezuela </option>");
          //  $("#codPais").append("<option value='1'>Venezuela </option>");
            $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
            $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
        
       
        }else{
          
          $("#codPais").empty().append("<option value='2'>Otro País </option>");

       
          $("#codParroquia").empty().append("<option value='99'>99 </option>");
         // $("#espeOtroPais").attr("disabled", false).prop($('#espeOtroPais').val(''));
         // $("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val('noaplica'));
         // $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val(''));
          }

      })

    $("#localizacion").change(function(){
      var id = $("#localizacion").val();
        if(id != 2){
          $.get("bienes/s4Ciudad/",function(response,ciudad){
             $("#codCiudad").empty();
                $("#codCiudad").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<response.length; i++){
                  $("#codCiudad").append("<option value='"+response[i].id+ "'> "+response[i].ciudad+"</option>");
          
      
      }
      //Esta función tiene que estar fuera del for

          })


        }else{
 
          $("#codCiudad").empty();
          $("#codCiudad").append("<option value='99'>99 </option>");
       
     
         
          }
      
      //Esta función tiene que estar fuera del for
       
      }) 





$(document).ready(function(){

   // $("#espeOtroPais").attr("disabled", true);
    $("#codPais").change(function(){
      var id = $("#codPais").val();
    if(id != 2){
      $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
    }else{
      $("#espeOtroPais").attr("disabled", false).prop($('#espeOtroPais').val(''));
    
      }
    })
  });


$(document).ready(function(){

   // $("#espeOtroCiudad").attr("disabled", true);
    $("#codCiudad").change(function(){
      var id = $("#codCiudad").val();
    if(id != 2){
      $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
    }else{
      $("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val(''));
    
      }
    })
  });


//MODIFICAR SEDES = S4
$(document).ready(function(){

   // $("#espeOtroCiudad").attr("disabled", true);
    $("#codCiudad2").change(function(){
      var id = $("#codCiudad2").val();
    if(id != 1){
      $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
    }else{
      $("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val(''));
    
      }
    })
  });
 
*/




 /*$("#localizacion").change(function(){
      var id = $("#localizacion").val();
        if(id != 2){
          $.get("bienes/s4/",function(response,parroquia){
             $("#codParroquia").empty();
                $("#codParroquia").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<response.length; i++){
                  $("#codParroquia").append("<option value='"+response[i].id+ "'> "+response[i].parroquia+"</option>");
        }

            })

              $("#codPais").empty().append("<option value='1'>Venezuela </option>");
              $("#codCiudad").empty().append("<option value='0' disabled selected>Seleccione...</option>");
              $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
              $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
          
         
          }else{
            
            $("#codPais").empty().append("<option value='2'>Otro País </option>");
            $("#codParroquia").empty().append("<option value='99'>99 </option>");
            $("#codCiudad").empty().append("<option value='99'>99 </option>");
            $("#espeOtroPais").attr("disabled", false).prop($('#espeOtroPais').val(''));
            $("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val(''));
            }

      })*/



