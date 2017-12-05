<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloConcurso extends Model
{
use SoftDeletes;

	
      protected $table ='concurso';

      protected $dates = ['deleted_at'];

      protected $fillable = ['codOrigen','codAdquisicion','nomConcurso','numConcurso','feConcurso','codProveedor','numContrato','feContrato','numNotaEntre','feNotaEntre','numFactura','feFactura','revisadot2','anulart2' ];
  

/* FUNCION DE SELECT*/

//Select del campo->id_>tip_prove_t1 de la migracion tabla_sl_provee_T1

 public function selectConcurso()
    {
        return $this->belongsTo('App\sel_concurso', 'codAdquisicion');
    }
}
