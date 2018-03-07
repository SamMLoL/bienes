
$(document).ready(function(){
    $("#espOtro").attr("disabled", true);
    $("#estatuBien").change(function(){
      var id = $("#estatuBien").val();
    if(id != 11){
      $("#espOtro").attr("disabled", true).prop($('#espOtro').val('noaplica'));
    }else{
      $("#espOtro").attr("disabled", false).prop($('#espOtro').val(''));
    
      }
    })
  });

$(document).ready(function(){
    $("#espeMoneda").attr("disabled", true);
    $("#moneda").change(function(){
      var id = $("#moneda").val();
    if(id != 4){
      $("#espeMoneda").attr("disabled", true).prop($('#espeMoneda').val('noaplica'));
    }else{
      $("#espeMoneda").attr("disabled", false).prop($('#espeMoneda').val(''));
    
      }
    })
  });

$(document).ready(function(){
    $("#espOtroEdo").attr("disabled", true);
    $("#edoBien").change(function(){
      var id = $("#edoBien").val();
    if(id != 7){
      $("#espOtroEdo").attr("disabled", true).prop($('#espOtroEdo').val('noaplica'));
    }else{
      $("#espOtroEdo").attr("disabled", false).prop($('#espOtroEdo').val(''));
    
      }
    })
  });

$(document).ready(function(){
    $("#espeColor").attr("disabled", true);
    $("#codColorBien").change(function(){
      var id = $("#codColorBien").val();
    if(id != 37){
      $("#espeColor").attr("disabled", true).prop($('#espeColor').val('noaplica'));
    }else{
      $("#espeColor").attr("disabled", false).prop($('#espeColor').val(''));
    
      }
    })
  });

//EQUIPO DE TRANSPORTE

$(document).ready(function(){
    $("#espeClase").attr("disabled", true);
    $("#claseBien").change(function(){
      var id = $("#claseBien").val();
    if(id != 4){
      $("#espeClase").attr("disabled", true).prop($('#espeClase').val('noaplica'));
    }else{
      $("#espeClase").attr("disabled", false).prop($('#espeClase').val(''));
    
      }
    })
  });

$(document).ready(function(){
    $("#espOtroUso").attr("disabled", true);
    $("#estatuBien").change(function(){
      var id = $("#estatuBien").val();
    if(id != 11){
      $("#espOtroUso").attr("disabled", true).prop($('#espOtroUso').val('noaplica'));
    }else{
      $("#espOtroUso").attr("disabled", false).prop($('#espOtroUso').val(''));
    
      }
    })
  });

//SEMOVIENTES

$(document).ready(function(){
    $("#espeOtroTipo").attr("disabled", true);
    $("#tipoAnimal").change(function(){
      var id = $("#tipoAnimal").val();
    if(id != 8){
      $("#espeOtroTipo").attr("disabled", true).prop($('#espeOtroTipo').val('noaplica'));
    }else{
      $("#espeOtroTipo").attr("disabled", false).prop($('#espeOtroTipo').val(''));
    
      }
    })
  });

$(document).ready(function(){
    $("#espeOtroPro").attr("disabled", true);
    $("#proposito").change(function(){
      var id = $("#proposito").val();
    if(id != 2){
      $("#espeOtroPro").attr("disabled", true).prop($('#espeOtroPro').val('noaplica'));
    }else{
      $("#espeOtroPro").attr("disabled", false).prop($('#espeOtroPro').val(''));
    
      }
    })
  });

//ANEXO S4

$(document).ready(function(){

    $("#espeSede").attr("disabled", true);
    $("#tipoSede").change(function(){
      var id = $("#tipoSede").val();
    if(id != 8){
      $("#espeSede").attr("disabled", true).prop($('#espeSede').val('noaplica'));
    }else{
      $("#espeSede").attr("disabled", false).prop($('#espeSede').val(''));
    
      }
    })
  });

$(document).ready(function(){

    $("#espeOtroPais").attr("disabled", true);
    $("#codPais").change(function(){
      var id = $("#codPais").val();
    if(id != 1){
      $("#espeOtroPais").attr("disabled", true).prop($('#espeOtroPais').val('noaplica'));
    }else{
      $("#espeOtroPais").attr("disabled", false).prop($('#espeOtroPais').val(''));
    
      }
    })
  });



/*SELECT LOCALIZACIÓN Y SELECT CODIGO DE PARROQUIA PARA CUANDO SELECCIONE INTERNACIONAL SE COLOQUE 99 EN CASO CONTRARIO TRAIGA LAS OPCIONES DEL OPTION(SELECT)*/  
$(document).ready(function(){
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
       
        }else{
          //$("#codParroquia").attr("disabled", true);
          $("#codParroquia").empty();
          $("#codParroquia").append("<option value='99'>99 </option>");
        
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
         $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
      }

          })
       
        }else{
          //$("#codCiudad").attr("disabled", true);
          $("#codCiudad").empty();
          $("#codCiudad").append("<option value='99'>99 </option>");
          $("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val(''));
        
          }
      })
});

$(document).ready(function(){

    $("#espeOtroCiudad").attr("disabled", true);
    $("#codCiudad").change(function(){
      var id = $("#codCiudad").val();
    if(id != 1){
      $("#espeOtroCiudad").attr("disabled", true).prop($('#espeOtroCiudad').val('noaplica'));
    }else{
      $("#espeOtroCiudad").attr("disabled", false).prop($('#espeOtroCiudad').val(''));
    
      }
    })
  });
 



