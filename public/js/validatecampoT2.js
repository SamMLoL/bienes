$(document).ready(function() {
  //$("#formularioColor").hide();
    $("#formValidaT2").validate({
        rules: {
           t2_cod_origen: { required:true},
           cod_adquisicion_t2: { required:true},
           nom_concurso_t2: { required:true},
           n_concurso_t2: { required:true},
           cod_proveedor_t2: { required:true},
           n_contracto_t2: { required:true},
           n_notaentrega_t2: { required:true},
           n_factura_t2: { required:true}
            
        },
        messages: {
            t2_cod_origen : "* Campo obligatorio, &nbsp;¡ Por favor introduzca  !",
            cod_adquisicion_t2 : "* Campo obligatorio, &nbsp;¡ Por favor !",
            nom_concurso_t2 : "* Campo obligatorio, &nbsp;¡ Por favor ingrese el  !",
            n_concurso_t2 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !",
            cod_proveedor_t2 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca !",
            n_contracto_t2 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !",
            n_notaentrega_t2: "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !",
            n_factura_t2: "* Campo obligatorio, &nbsp;¡ Por favor introduzca el !"
        

        },
                
      });
  });