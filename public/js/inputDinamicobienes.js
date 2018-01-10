
$(document).ready(function(){
    $("#espOtro").attr("disabled", true);
    $("#estatuBien").change(function(){
      var id = $("#estatuBien").val();
    if(id == 11){
      $("#espOtro").attr("disabled", false);
    }else{
      $("#espOtro").attr("disabled", true);
    
      }
    })
  });

$(document).ready(function(){
    $("#espeMoneda").attr("disabled", true);
    $("#moneda").change(function(){
      var id = $("#moneda").val();
    if(id == 4){
      $("#espeMoneda").attr("disabled", false);
    }else{
      $("#espeMoneda").attr("disabled", true);
    
      }
    })
  });
