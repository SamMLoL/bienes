$(document).ready(function() {

    $("#formValidaT1").validate({
        rules: {
           cod_proveedor_t1: { required:true},
           desc_prove_t1: { required:true},
           tip_prove_t1: {required:true},
           t1_rif: { required:true},
            
        },
        messages: {
            cod_proveedor_t1 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el código del proveedor !",
            desc_prove_t1 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca la descripción del proveedor!",
            tip_prove_t1 : "* Campo obligatorio, &nbsp;¡ Por favor seleccione el tipo de proveedor !",
            t1_rif : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el número de RIF !"
        

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