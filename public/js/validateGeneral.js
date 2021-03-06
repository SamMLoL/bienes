$(document).ready(function() {
//TABLA PROVEEDORES

    $("#formValidaT1").validate({
        rules: {
           
           codProvee: { required:true},
           descProvee: { required:true},
           tipProvee: { required:true},
           grupo: { required:true},
           rifProvee: { required:true},
            
        },

        messages: {
           
            codProvee : "* Campo obligatorio, &nbsp;¡ Por favor, introduzca el código del proveedor!",
            descProvee : "* Campo obligatorio, &nbsp;¡ Por favor, introduzca la descripción del proveedor!",
            tipProvee : "* Campo obligatorio, &nbsp;¡ Por favor, seleccione el tipo de proveedor !",
            grupo : "* Campo obligatorio, &nbsp;¡ Por favor, seleccione el grupo de contribuyente !",
            rifProvee : "* Campo obligatorio, &nbsp;¡ Por favor, introduzca el número de rif !",

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

  // INPUT DISABLED EN TABLA DE PROVEEDORES AL SELECCIONAR LA SEGUNDA OPCION SE DESABILITA EL INPUT OTRA DESCRIPCIÓN
 


  //TABLA SEGUROS
    $("#formValidaT3").validate({
        rules: {
           compAse: { required:true},
           tipPoli: { required:true},
           moneda: { required:true},
           poseRes: { required:true},
           tipoCobe: { required:true},
           
        },
        messages: {
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
           codUnidad: { required:true},
            
        },
        messages: {
            codResp : "* Campo obligatorio, ¡Por favor, introduzca el código del responsable!",
            tipoResp : "* Campo obligatorio, ¡ Por favor, seleccione el tipo de responsable!",
            cedula : "* Campo obligatorio, ¡ Por favor, introduzca la cédula de identidad!",
            nomRes: "* Campo obligatorio,¡ Por favor, introduzca nombre del responsable!",
            apeRes : "* Campo obligatorio, ¡Por favor, introduzca el apellido del responsable!",
            telfRes : "* Campo obligatorio, ¡Por favor, introduzca el teléfono del responsable!",
            cargoRes : "* Campo obligatorio, ¡ Por favor, introduzca el cargo del responsable",
            codUnidad : "* Campo obligatorio, ¡ Por favor, seleccione la dependencia administrativa del responsable!"
        

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

    // INPUT DISABLED EN TABLA DE BIENES AL SELECCIONAR LA SEGUNDA OPCION SE DESABILITA EL INPUT OTRA DESCRIPCIÓN
    //ANEXO T8 = BIENES

    $("#formValidaT8").validate({
        rules: {
           codOt2_1: { required:true},
           codUnidad: { required:true},
           estatuBien: { required:true},
           moneda: { required:true},
           edoBien: { required:true},
           codMarca: { required:true},
           codModel: { required:true},
           codColorBien: { required:true},
           unidadMedi: { required:true},
           poseeCompo: { required:true},
           seguroBien: { required:true},
           
        },
        
        messages: {
           codOt2_1 : "* Campo obligatorio, ¡ Por favor, introduzca el código del origen del bien !",
           codUnidad : "* Campo obligatorio, ¡ Por favor, seleccione la dependencia administrativa !",
           estatuBien : "* Campo obligatorio, ¡ Por favor, seleccione el estatus del uso del bien !",
           moneda : "* Campo obligatorio, ¡ Por favor, seleccione la moneda !",
           edoBien : "* Campo obligatorio, ¡ Por favor, seleccione el estado del bien !",
           codMarca : "* Campo obligatorio, ¡ Por favor, seleccione el código de la marca del bien !",
           codModel : "* Campo obligatorio, ¡ Por favor, seleccione el código del modelo del bien !",
           codColorBien : "* Campo obligatorio, ¡ Por favor, seleccione el color del bien !",
           unidadMedi : "* Campo obligatorio, ¡ Por favor, seleccione la unidad de medida de la garantía !",
           poseeCompo : "* Campo obligatorio, ¡ Por favor, seleccione si el bien posee componentes !",
           seguroBien : "* Campo obligatorio, ¡ Por favor, seleccione si el bien se encuentra asegurado !",
           
         
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


$("#formValidaT9").validate({
        rules: {
           codBien: { required:true},
           depAdmRes: { required:true},
           estatuBien: { required:true},
           moneda: { required:true},
           edoBien: { required:true},
           claseBien: { required:true},
           codMarca: { required:true},
           codModel: { required:true},
           codColorBien: { required:true},
           unidadMedi: { required:true},
           tieneSistema: { required:true},
           poseeCompo: { required:true},
           seguroBien: { required:true},
           
        },
        
        messages: {
           codBien : "* Campo obligatorio, ¡ Por favor, introduzca el código del origen del bien !",
           depAdmRes : "* Campo obligatorio, ¡ Por favor, seleccione la dependencia administrativa !",
           estatuBien : "* Campo obligatorio, ¡ Por favor, seleccione el estatus del uso del bien !",
           moneda : "* Campo obligatorio, ¡ Por favor, seleccione la moneda !",
           edoBien : "* Campo obligatorio, ¡ Por favor, seleccione el estado del bien !",
           claseBien : "* Campo obligatorio, ¡ Por favor, seleccione la clase del bien !",
           codMarca : "* Campo obligatorio, ¡ Por favor, seleccione el código de la marca del bien !",
           codModel : "* Campo obligatorio, ¡ Por favor, seleccione el código del modelo del bien !",
           codColorBien : "* Campo obligatorio, ¡ Por favor, seleccione el color del bien !",
           unidadMedi : "* Campo obligatorio, ¡ Por favor, seleccione la unidad de medida de la garantía !",
           tieneSistema : "* Campo obligatorio, ¡ Por favor, seleccione si posee, sistema de rastreo y localización en uso !",
           poseeCompo : "* Campo obligatorio, ¡ Por favor, seleccione si el bien posee componentes !",
           seguroBien : "* Campo obligatorio, ¡ Por favor, seleccione si el bien se encuentra asegurado !"
           
         
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

$("#formValidaT10").validate({
        rules: {
           codBien: { required:true},
           depAdmRes: { required:true},
           estatuBien: { required:true},
           moneda: { required:true},
           edoBien: { required:true},
           genero: { required:true},
           tipoAnimal: { required:true},
           proposito: { required:true},
           codColorBien: { required:true},
           unidadPeso: { required:true},
           seguroBien: { required:true},
           
        },
        
        messages: {
           codBien : "* Campo obligatorio, ¡ Por favor, introduzca el código del origen del bien !",
           depAdmRes : "* Campo obligatorio, ¡ Por favor, seleccione la dependencia administrativa !",
           estatuBien : "* Campo obligatorio, ¡ Por favor, seleccione el estatus del uso del bien !",
           moneda : "* Campo obligatorio, ¡ Por favor, seleccione la moneda !",
           edoBien : "* Campo obligatorio, ¡ Por favor, seleccione el estado del bien !",
           genero : "* Campo obligatorio, ¡ Por favor, seleccione el genero !",
           tipoAnimal : "* Campo obligatorio, ¡ Por favor, seleccione el tipo de animal !",
           proposito : "* Campo obligatorio, ¡ Por favor, seleccione el propósito !",
           codColorBien : "* Campo obligatorio, ¡ Por favor, seleccione el color del bien !",
           unidadPeso : "* Campo obligatorio, ¡ Por favor, seleccione la unidad de medida del peso !",
           seguroBien : "* Campo obligatorio, ¡ Por favor, seleccione si el bien se encuentra asegurado !"
           
         
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

$("#formValidaT11").validate({
        rules: {
           codBien: { required:true},
           codMarca: { required:true},
           codModel: { required:true},
           
        },
        
        messages: {
           codBien : "* Campo obligatorio, ¡ Por favor, introduzca el código del origen del bien !",
           codMarca : "* Campo obligatorio, ¡ Por favor, seleccione el código de la marca !",
           codModel : "* Campo obligatorio, ¡ Por favor, seleccione el código del modelo !",
           
         
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

//ANEXO INMUEBLES

$("#formValidaT12").validate({
        rules: {
           codBien: { required:true},
           depAdmRes: { required:true},
           corresBien: { required:true},
           localizacion: { required:true},
           codPais: { required:true},
           codParroquia: { required:true},
           codCiudad: { required:true},
           estatuBien: { required:true},
           moneda: { required:true},
           edoBien: { required:true},
           usoBienInmu: { required:true},
           unidadConstru: { required:true},
           unidadTerreno: { required:true},
           seguroBien: { required:true},
           
        },
        
        messages: {
           codBien : "* Campo obligatorio, ¡ Por favor, introduzca el código del origen del bien !",
           depAdmRes : "* Campo obligatorio, ¡ Por favor, seleccione la dependencia administrativa !",
           corresBien : "* Campo obligatorio, ¡ Por favor, seleccione si el inmueble corresponde a alguna sede del ente !",
           localizacion : "* Campo obligatorio, ¡ Por favor, seleccione la localización !",
           codPais : "* Campo obligatorio, ¡ Por favor, seleccione el país !",
           codParroquia : "* Campo obligatorio, ¡ Por favor, seleccione la parroquia !",
           codCiudad : "* Campo obligatorio, ¡ Por favor, seleccione la ciudad !",
           estatuBien : "* Campo obligatorio, ¡ Por favor, seleccione el estatus del bien !",
           moneda : "* Campo obligatorio, ¡ Por favor, seleccione la moneda !",
           edoBien : "* Campo obligatorio, ¡ Por favor, seleccione el estado del bien !",
           usoBienInmu : "* Campo obligatorio, ¡ Por favor, seleccione el uso del bien inmueble !",
           unidadConstru : "* Campo obligatorio, ¡ Por favor, seleccione la unidad de medida del área de construcción !",
           unidadTerreno : "* Campo obligatorio, ¡ Por favor, seleccione la unidad de medida del área del terreno !",
           seguroBien : "* Campo obligatorio, ¡ Por favor, seleccione si se encuentra asegurado el bien !",
           
         
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

$("#formValidaS1").validate({
        rules: {
           
           codSigecof: { required:true},
           grupo: { required:true},
           rifProvee: { required:true},
            
        },

        messages: {
           
            codSigecof : "* Campo obligatorio, &nbsp;¡ Por favor, introduzca el código SIGECOF!",
            rifProvee : "* Campo obligatorio, &nbsp;¡ Por favor, introduzca el número de rif !",

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

$("#formValidaS5").validate({
        rules: {
           
           codUnidad: { required:true},
           descUnidad: { required:true},
           categoria: { required:true},
         
          
            
        },

        messages: {
           
            codUnidad : "* Campo obligatorio, &nbsp;¡ Por favor, introduzca el código de la unidad administrativa !",
            descUnidad : "* Campo obligatorio, &nbsp;¡ Por favor, describa la denominación de la unidad !",
            categoria : "* Campo obligatorio, &nbsp;¡ Por favor, seleccione la categoría de la unidad !",
           
            

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



