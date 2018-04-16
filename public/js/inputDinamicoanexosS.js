

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
      if(id != 239){
         $("#espeOtroPais").attr("disabled", true).append($('#espeOtroPais').val('noaplica'));

      }else{
        $("#espeOtroPais").attr("disabled", false).append($('#espeOtroPais').val(''));
      }
    })

    $("#codCiudad").change(function(){
      var id = $("#codCiudad").val();
      if(id != 331){
        $("#espeOtroCiudad").attr("disabled", true).append($('#espeOtroCiudad').val('noaplica'));
      }else{
        $("#espeOtroCiudad").attr("disabled", false).append($('#espeOtroCiudad').val(''));
    
       }
    })


//SELECT LOCALIZACIÓN Y SELECT si se selecciona nacional te trae venezuela si se selecciona internacional te trae otro país CODIGO DE PARROQUIA PARA CUANDO SELECCIONE INTERNACIONAL SE COLOQUE 99 EN CASO CONTRARIO TRAIGA LAS OPCIONES DEL OPTION(SELECT)*/  


<!---->

$("#localizacion").change(function(){
      var id = $("#localizacion").val();
        if(id != 2){
          $.get("bienes/s4Parro/",function(response,parroquia){
             $("#codParroquia").empty();
                $("#codParroquia").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<1093; i++){
                  $("#codParroquia").append("<option value='"+response[i].id+ "'> "+response[i].parroquia+"</option>");
        }

            })

          $.get("bienes/s4Ciudad/",function(response,ciudad){
             $("#codCiudad").empty();
                $("#codCiudad").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<331; i++){
                  $("#codCiudad").append("<option value='"+response[i].id+ "'> "+response[i].ciudad+"</option>");
        }

            })

       
 
              $("#codPais").empty().append("<option value='230'>Venezuela </option>");
              $("#espeOtroPais").attr("disabled", true).append($('#espeOtroPais').val('noaplica'));
              $("#espeOtroCiudad").attr("disabled", true).append($('#espeOtroCiudad').val('noaplica'));
              /*$("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));*/
              $("#codParroquia").attr("disabled", false);
              $("#codCiudad").attr("disabled", false);
            
              //$("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
             

       
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
              $("#codParroquia").empty().append("<option value='1093'>99 </option>");
              $("#codCiudad").attr("disabled", false);
              $("#codCiudad").empty().append("<option value='332'>99 </option>");
              
             
            }

      })

//Modificar visSedes = S4


$("#localizacion2").change(function(){

      var id = $("#localizacion2").val();
        if(id != 2){
         var s4Parro2 = $('#s4Parro2').val();
          $.get(s4Parro2+'/'+event.target.value+"",function(response,parroquia){
             $("#codParroquia2").empty();
                $("#codParroquia2").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<1093; i++){
                  $("#codParroquia2").append("<option value='"+response[i].id+ "'> "+response[i].parroquia+"</option>");
        }

            })
        var s4Ciudad2 = $('#s4Ciudad2').val();
          $.get(s4Ciudad2+'/'+event.target.value+"",function(response,ciudad){
             $("#codCiudad2").empty();
                $("#codCiudad2").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<331; i++){
                  $("#codCiudad2").append("<option value='"+response[i].id+ "'> "+response[i].ciudad+"</option>");
        }

            })

       
 
              $("#codPais2").empty().append("<option value='230'>Venezuela </option>");
              $("#espeOtroPais2").attr("disabled", true).append($('#espeOtroPais').val('noaplica'));
              $("#espeOtroCiudad2").attr("disabled", true).append($('#espeOtroCiudad').val('noaplica'));
              /*$("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));*/
              $("#codParroquia2").attr("disabled", false);
              $("#codCiudad2").attr("disabled", false);
            
              //$("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
             

       
          }else{

          
            var s4Pais2 = $('#s4Pais2').val();
             $.get(s4Pais2+'/'+event.target.value+"",function(response,pais){
              $("#codPais2").empty();
                $("#codPais2").append("<option value='0' disabled selected>Seleccione... </option>");
                 for(i=0; i<response.length; i++){
                  $("#codPais2").append("<option value='"+response[i].id+ "'> "+response[i].pais+"</option>");
        }

            })
            
              /*$("#codPais").empty().append("<option value='2'>Otro País </option>");*/

              $("#codParroquia2").attr("disabled", false);
              $("#codParroquia2").empty().append("<option value='1093'>99 </option>");
              $("#codCiudad2").attr("disabled", false);
              $("#codCiudad2").empty().append("<option value='332'>99 </option>");
              
             
            }

      })

      




 





 

