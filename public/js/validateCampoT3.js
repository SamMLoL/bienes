$(document).ready(function() {
  //$("#formularioColor").hide();
    $("#formValidaT3").validate({
        rules: {
           codRegT3: { required:true},
           compAse: { required:true},
           tipPoli: { required:true},
           moneda: { required:true},
           poseRes: { required:true},
           tipoCobe: { required:true},
            
        },
        messages: {
            codRegT3 : "* Campo obligatorio, ¡Por favor, introduzca el código del registro!",
            compAse : "* Campo obligatorio, ¡ Por favor, seleccione la compañia aseguradora!",
            tipPoli : "* Campo obligatorio, ¡ Por favor, seleccione el tipo de poliza!",
            moneda: "* Campo obligatorio,¡ Por favor, seleccione la moneda!",
            poseRes : "* Campo obligatorio, ¡Por favor, seleccione si posee responsabilidad civil!",
            tipoCobe : "* Campo obligatorio, ¡ Por favor, seleccione el tipo de cobertura!",
        

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

