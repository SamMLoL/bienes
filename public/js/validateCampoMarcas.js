$(document).ready(function() {
  //$("#formularioColor").hide();
    $("#formValidaAña").validate({
        rules: {
           codMarca: { required:true},
           denCoMar: { required:true},
           nomFabri: { required:true},
         
        },
        messages: {
           codMarca : "* Campo obligatorio, ¡Por favor, introduzca el código de la marca!",
           denCoMar : "* Campo obligatorio, ¡ Por favor, introduzca la denominación de la marca!",
           nomFabri : "* Campo obligatorio, ¡ Por favor, introduzca el nombre del fabricante!"
         
        

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

