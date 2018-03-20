
    // visProveedores = Anexo T1
    $('#tipProvee').change(function(){
        var id = $('#tipProvee').val();
        if(id != 2){
           $("#otraDesc").attr("disabled", true).prop($('#otraDesc').val('xxx'));

        }else{
            $("#otraDesc").attr("disabled", false).prop($('#otraDesc').val(''));
        }
    })

     //visSeguros = ANEXOS T3
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

    //ANEXOS T8 , T9 , T10 , T12
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

    //ANEXOS T8 , T9 , T10 , T12
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

    //ANEXOS T8 , T9 , T10 , T12
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

  //ANEXOS T8 , T9 , T10 
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


//ANEXO TRASPORTE


  
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
  



