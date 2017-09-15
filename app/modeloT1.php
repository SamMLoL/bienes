<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT1 extends Model
{     
	  protected $table ='T1';
      protected $fillable = [
    'cod_proveedor_t1','desc_prove_t1','tip_prove_t1','t1_rif','otr_descr_t1','revisadot1','anuladot1'
    ];


     public function selectT1()
    {
        return $this->belongsTo('App\mod_selectT1', 'tip_prove_t1');
    }

    
}


/* FUNCION DE SELECT*/

//Select del campo->id_>tip_prove_t1 de la migracion tabla_sl_provee_T1

