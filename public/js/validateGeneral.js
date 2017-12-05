$(document).ready(function() {
//TABLA PROVEEDORES
    $("#formValidaT1").validate({
        rules: {
           codProvee: { required:true},
           descProvee: { required:true},
           tipProvee: {required:true},
           rifProvee: { required:true},
            
        },
        messages: {
            codProvee : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el código del proveedor !",
            descProvee : "* Campo obligatorio, &nbsp;¡ Por favor introduzca la descripción del proveedor!",
            tipProvee : "* Campo obligatorio, &nbsp;¡ Por favor seleccione el tipo de proveedor !",
            rifProvee : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el número de RIF !"
        

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


  //TABLA SEGUROS
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


      //TABLA RESPONSABLE DE LOS BIENES
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
 

  //$("#formularioColor").hide();
    $("#formValidaT5").validate({
        rules: {
           denCoMar: { required:true},
           codMarca: { required:true},
           nomFabri: { required:true},
         
        },
        messages: {
           denCoMar : "* Campo obligatorio, ¡ Por favor, introduzca el código de la marca!",
           codMarca : "* Campo obligatorio, ¡ Por favor, introduzca la denominación de la marca!",
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

     $("#formValidaT6").validate({
        rules: {
           codModel: { required:true},
           denModFab: { required:true},
           codMarca: { required:true},
           codSegModel: { required:true},
         
        },
        messages: {
           codModel : "* Campo obligatorio, ¡ Por favor, introduzca el código del modelo!",
           denModFab : "* Campo obligatorio, ¡ Por favor, introduzca la denominación de la marca!",
           codMarca : "* Campo obligatorio, ¡ Por favor, seleccione el código de la marca!",
           codSegModel : "* Campo obligatorio, ¡ Por favor, introduzca el código del bien mueble según catalogo al que puede aplicar el modelo!"
         
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


    $("#formValidaT7").validate({
        rules: {
           codigo: { required:true},
           denComponente: { required:true},
           codBienMueble: { required:true},
           
         
        },
        messages: {
           codigo : "* Campo obligatorio, ¡ Por favor, introduzca el código asignado por el ente!",
           denComponente : "* Campo obligatorio, ¡ Por favor, introduzca la denominación del componente!",
           codBienMueble : "* Campo obligatorio, ¡ Por favor, indique el código del bien mueble según el catalogo!"
           
         
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