$(document).ready(function() {
  //$("#formularioColor").hide();
    $("#formValidaT4").validate({
        rules: {
           codResp: { required:true},
           tipoResp: { required:true},
           cedula: { required:true},
           nomRes: { required:true},
           apeRes: { required:true},
           telfRes: { required:true},
           cargoRes: { required:true},
           depAdmRes: { required:true},
            
        },
        messages: {
            codResp : "* Campo obligatorio, ¡Por favor, introduzca el código del responsable!",
            tipoResp : "* Campo obligatorio, ¡ Por favor, seleccione el tipo de responsable!",
            cedula : "* Campo obligatorio, ¡ Por favor, introduzca la cédula de identidad!",
            nomRes: "* Campo obligatorio,¡ Por favor, introduzca nombre del responsable!",
            apeRes : "* Campo obligatorio, ¡Por favor, introduzca el apellido del responsable!",
            telfRes : "* Campo obligatorio, ¡Por favor, introduzca el teléfono del responsable!",
            cargoRes : "* Campo obligatorio, ¡ Por favor, introduzca el cargo del responsable",
            depAdmRes : "* Campo obligatorio, ¡ Por favor, seleccione la dependencia administrativa del responsable!"
        

        },

        highlight: function(element, errorClass, validClass) {
                  $(element).addClass(errorClass).removeClass(validClass);
          // Keeps the default behaviour, adding error class to element but seems to break the default radio group behaviour but the below fixes that
                  $(element).closest('ul').addClass(errorClass);
          // add error class to ul element for checkbox groups and radio inputs
              },
              unhighlight: function(element, errorClass, validClass) {
                  $(element).removeClass(errorClass).addClass(validClass);
          // keeps the default behaviour removing error class from elements
                  $(element).closest('ul').removeClass(errorClass);
          // remove error class from ul element for checkbox groups and radio inputs
              },
        // FIX END
 
        errorLabelContainer: ".js-errors",
        errorElement: "li", 
                
            });
  });

