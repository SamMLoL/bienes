$(document).ready(function() {
  //$("#formularioColor").hide();
    $("#formValidaT3").validate({
        rules: {
           cod_registro_t3: { required:true},
           comp_aseguradora_t3: { required:true},
           otra_comp_ase_t3: { required:true},
           n_poliza_t3: { required:true},
           tip_poliza_t3: { required:true},
           monto_asegurado_t3: { required:true},
           moneda_t3: { required:true},
           espe_moneda_t3: { required:true},
           respon_civil_t3: { required:true},
           tip_cobertura_t3: { required:true},
           espec_tip_cober_t3: { required:true}
            
        },
        messages: {
            cod_registro_t3 : "* Campo obligatorio, ¡Por favor rellene el campo!",
            comp_aseguradora_t3 : "* Campo obligatorio, ¡ Por favor ingrese el nombre!",
            otra_comp_ase_t3 : "* Campo obligatorio, ¡ Por favor rellene el campo !",
            n_poliza_t3 : "* Campo obligatorio, ¡ Por favor rellene el campo!",
            tip_poliza_t3 : "* Campo obligatorio, ¡ Por favor rellene el campo!",
            monto_asegurado_t3: "* Campo obligatorio,¡ Por favor rellene el campo!",
            moneda_t3: "* Campo obligatorio, ¡ Por favor rellene el campo!",
            espe_moneda_t3: "* Campo obligatorio, ¡ Por favor rellene el campo!",
            respon_civil_t3: "* Campo obligatorio, ¡ Por favor rellene el campo!",
            tip_cobertura_t3: "* Campo obligatorio, ¡ Por favor rellene el campo!",
            espec_tip_cober_t3: "* Campo obligatorio, ¡ Por favor rellene el campo!"
        

        },
                
            });
  });