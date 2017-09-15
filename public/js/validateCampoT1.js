$(document).ready(function() {

    $("#formValidaT1").validate({
        rules: {
           cod_proveedor_t1: { required:true},
           desc_prove_t1: { required:true},
           tip_prove_t1: {required:true},
           t1_rif: { required:true},
            
        },
        messages: {
            cod_proveedor_t1 : "* Campo obligatorio, &nbsp;¡ Por favor introduzca  !",
            desc_prove_t1 : "* Campo obligatorio, &nbsp;¡ Por favor !",
            tip_prove_t1 : "* Campo obligatorio, &nbsp;¡ Por favor !",
            t1_rif : "* Campo obligatorio, &nbsp;¡ Por favor ingrese el  !"
        

        },
                
    });
  });