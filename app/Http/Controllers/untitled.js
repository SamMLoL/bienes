
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
              $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
             
          
         
          }else{
            
            $("#codPais").empty().append("<option value='2'>Otro País </option>");
            $("#codParroquia").empty().append("<option value='99'>99 </option>");
            $("#codCiudad").empty().append("<option value='99'>99 </option>");
            $("#espeOtroPais").attr("disabled", false).prop($('#espeOtroPais').val(''));
           
            }

      })*/



      

      /* 2   $("#localizacion").change(function(){
     var id = $("#localizacion").val();
       if(id == 1){
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

            $("#codPais").empty().append("<option value='1'>Venezuela </option>");
            $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
           /* $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
             
          
         
          }else{
            
            $("#codPais").empty().append("<option value='2'>Otro País </option>");
            $("#codParroquia").empty().append("<option value='99'>99 </option>");
            $("#codCiudad").empty().append("<option value='99'>99 </option>");
            $("#espeOtroPais").attr("disabled", false).prop($('#espeOtroPais').val(''));
            /*$("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val(''));
           
            }

         })*/

