<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloConcurso extends Model
{
      protected $table ='concurso';
      protected $fillable = ['codOrigen','codAdquisicion','nomConcurso','numConcurso','feConcurso','codProveedor','numContrato','feContrato','numNotaEntre','feNotaEntre','numFactura','feFactura','revisadot2','anulart2' ];
  

/* FUNCION DE SELECT*/

//Select del campo->id_>tip_prove_t1 de la migracion tabla_sl_provee_T1

 public function selectConcurso()
    {
        return $this->belongsTo('App\sel_concurso', 'codAdquisicion');
    }
}
