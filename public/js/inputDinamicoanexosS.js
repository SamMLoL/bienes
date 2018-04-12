

//SEDES = ANEXO S4

    $("#tipoSede").change(function(){
       var id = $("#tipoSede").val();
       if(id != 8){
          $("#espeSede").attr("disabled", true).prop($('#espeSede').val('noaplica'));
       }else{
          $("#espeSede").attr("disabled", false).prop($('#espeSede').val(''));
    
       }
    })


    $("#codPais").change(function(){
      var id = $("#codPais").val();
      if(id == 239){
         $("#espeOtroPais").attr("disabled", false).prop($('#espeOtroPais').val(''));

      }
    })


    /*$("#codCiudad").change(function(){
      var id = $("#codCiudad").val();
      if(id != 2){
        $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
      }else{
        $("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val(''));
    
       }
    })*/


//SELECT LOCALIZACIÓN Y SELECT si se selecciona nacional te trae venezuela si se selecciona internacional te trae otro país CODIGO DE PARROQUIA PARA CUANDO SELECCIONE INTERNACIONAL SE COLOQUE 99 EN CASO CONTRARIO TRAIGA LAS OPCIONES DEL OPTION(SELECT)*/  


<!---->

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

          $.get("bienes/s4Ciudad/",function(response,ciudad){
             $("#codCiudad").empty();
                $("#codCiudad").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<response.length; i++){
                  $("#codCiudad").append("<option value='"+response[i].id+ "'> "+response[i].ciudad+"</option>");
        }

            })

       

              $("#codPais").empty().append("<option value='230'>Venezuela </option>");
              /*$("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));*/
              $("#codParroquia").attr("disabled", false);
              $("#codCiudad").attr("disabled", false);
              $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
             

          var id = $("#codPais").val();
          }else if(id == 239){
            
              $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val(''));
          
      

          }else{

             $.get("bienes/s4Pais/",function(response,pais){
              $("#codPais").empty();
                $("#codPais").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<response.length; i++){
                  $("#codPais").append("<option value='"+response[i].id+ "'> "+response[i].pais+"</option>");
        }

            })
            
              /*$("#codPais").empty().append("<option value='2'>Otro País </option>");*/
              $("#codParroquia").attr("disabled", false);
              $("#codParroquia").empty().append("<option value='99'>99 </option>");
              $("#codCiudad").attr("disabled", false);
              $("#codCiudad").empty().append("<option value='99'>99 </option>");
              
             
            }

      })

      




 





 

