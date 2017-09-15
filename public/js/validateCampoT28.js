$(document).ready(function() {
    $("#formValidaT28").validate({
        rules: {
           codAdq: { required:true},
          
            
        },
        messages: {
            codAdq : "* Campo obligatorio, &nbsp;¡Por favor, seleccione el código de la forma de adquisición según el caso!",
            
        

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