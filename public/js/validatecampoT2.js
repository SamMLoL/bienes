$(document).ready(function() {
$("#formularioColor").hide();
    $("#formValidaT2").validate({
        rules: {
           //t2_cod_origen: { required:true},
           cod_adquisicion_t2: { required:true},
           /*nom_concurso_t2: { required:true},
           n_concurso_t2: { required:true},
           cod_proveedor_t2: { required:true},
           n_contracto_t2: { required:true},
           n_notaentrega_t2: { required:true},
           n_factura_t2: { required:true}*/
            
       },
        messages: {
            //t2_cod_origen : "* Campo obligatorio, &nbsp;¡ Por favor introduzca  !",
            cod_adquisicion_t2 : "* Campo obligatorio, &nbsp;¡Por favor, seleccione el código de la forma de adquisición según el caso!",
            /*nom_concurso_t2 : "* Campo obligatorio, &nbsp;¡ Por favor ingrese el  !",
            n_concurso_t2 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !",
            cod_proveedor_t2 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca !",
            n_contracto_t2 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !",
            n_notaentrega_t2: "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !",
            n_factura_t2: "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !"*/
        

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