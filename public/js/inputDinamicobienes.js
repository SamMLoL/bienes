
$(document).ready(function(){
    $("#espOtro").attr("disabled", true);
    $("#estatuBien").change(function(){
      var id = $("#estatuBien").val();
    if(id != 11){
      $("#espOtro").attr("disabled", true).prop($('#espOtro').val('noaplica'));
    }else{
      $("#espOtro").attr("disabled", false);
    
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
      $("#espeMoneda").attr("disabled", false);
    
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
      $("#espOtroEdo").attr("disabled", false);
    
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
      $("#espeColor").attr("disabled", false);
    
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
      $("#espeClase").attr("disabled", false);
    
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
      $("#espOtroUso").attr("disabled", false);
    
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
      $("#espeOtroTipo").attr("disabled", false);
    
      }
    })
  });

$(document).ready(function(){
    $("#espeOtroPro").attr("disabled", true);
    $("#proposito").change(function(){
      var id = $("#proposito").val();
    if(id != 7){
      $("#espeOtroPro").attr("disabled", true).prop($('#espeOtroPro').val('noaplica'));
    }else{
      $("#espeOtroPro").attr("disabled", false);
    
      }
    })
  });


