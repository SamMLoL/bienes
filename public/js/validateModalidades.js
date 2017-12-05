$(document).ready(function() {

      
      //TABLA COMPRA POR CONCURSO
      $("#formValidaT2").validate({
        rules: {
           codOrigen: { required:true},
           codAdquisicion: { required:true},
          
            
       },
        messages: {
            codOrigen : "* Campo obligatorio, &nbsp;¡Por favor, introduzca el código de origen!",
            codAdquisicion : "* Campo obligatorio, &nbsp;¡Por favor, seleccione el código de la forma de adquisición según el caso!",
            
        
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

      //TABLA COMPRA DIRECTA
      $("#formValidaT21").validate({
        rules: {
           codOt2_1: { required:true},
           codAdq: { required:true},
           codProvee: { required:true},
           numCom: { required:true},
          
        },
        messages: {
            codOt2_1 : "* Campo obligatorio, &nbsp;¡Por favor, introduzca el código de origen!",
            codAdq : "* Campo obligatorio, &nbsp;¡Por favor, seleccione el código de la forma de adquisición según el caso!",
            codProvee : "* Campo obligatorio, &nbsp;¡Por favor, seleccione el código del proveedor según las especificaciones descritas en proveedores!",
            numCom : "* Campo obligatorio, &nbsp;¡Por favor, introduzca el número de la orden de compra!",
            

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
 
      //TABLA CONFISCACIÓN
      $("#formValidaT22").validate({
          rules: {
             codOt2_2: { required:true},
             codAdq: { required:true},
              
          },
          messages: {
              codOt2_2 : "* Campo obligatorio, &nbsp;¡Por favor, introduzca el código de origen!",
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

      //TABLA DACIÓN EN PAGO
      $("#formValidaT23").validate({
        rules: {
           codOt2_3: { required:true},
           codAdq: { required:true},
            
        },
        messages: {
           
            codOt2_3 : "* Campo obligatorio, &nbsp;¡Por favor, Por favor, introduzca el código de origen!",
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

      //TABLA DONACIÓN
      $("#formValidaT24").validate({
        rules: {
           codOt2_4: { required:true},
           codAdq: { required:true},
          
            
        },
        messages: {
            codOt2_4 : "* Campo obligatorio, &nbsp;¡Por favor, Por favor, introduzca el código de origen!",
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

      //TABLA EXPROPIACIÓN
      $("#formValidaT25").validate({
        rules: {
           codOt2_5: { required:true},
           codAdq: { required:true},
          
            
        },
        messages: {
            codOt2_5 : "* Campo obligatorio, &nbsp;¡Por favor, Por favor, introduzca el código de origen!",
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

      //TABLA PERMUTA
      $("#formValidaT26").validate({
        rules: {
           codOt2_6: { required:true},
           codAdq: { required:true},
          
            
        },
        messages: {
            codOt2_6 : "* Campo obligatorio, &nbsp;¡Por favor, Por favor, introduzca el código de origen!",
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
  
    //TABLA TRANSFERENCIA
    $("#formValidaT27").validate({
        rules: {
           codOt2_7: { required:true},
           codAdq: { required:true},
          
            
        },
        messages: {
            codOt2_7 : "* Campo obligatorio, &nbsp;¡Por favor, Por favor, introduzca el código de origen!",
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

    //TABLA ADJUDICACIÓN
    $("#formValidaT28").validate({
        rules: {
           codOt2_8: { required:true},
           codAdq: { required:true},
          
            
        },
        messages: {
            codOt2_8 : "* Campo obligatorio, &nbsp;¡Por favor, Por favor, introduzca el código de origen!",
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