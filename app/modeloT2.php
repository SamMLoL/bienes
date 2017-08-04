<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT2 extends Model
{
	  protected $table ='T2';
      protected $fillable = [
    't2_cod_origen','cod_adquisicion_t2','nom_concurso_t2','n_concurso_t2','fe_concurso_t2','cod_proveedor_t2','n_contracto_t2','fe_contracto_t2','n_notaentrega_t2','fe_nota_entrega_t2','fe_factura_t2','n_factura_t2','revisadot2','anulart2'
    ];



/* FUNCION DE SELECT*/

//Select del campo->id_>tip_prove_t1 de la migracion tabla_sl_provee_T1

 public function selectt2()
    {
        return $this->belongsTo('App\mod_selectT2', 'cod_adquisicion_t2');
    }

}