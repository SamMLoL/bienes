<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloConfiscacion extends Model
{
  
    protected $table = 'confiscacion';
    protected $fillable = ['codOt2_2','codAdq','nomPa','nomBen','nomAuto','numSenc','nomRegno','tomo','folio','feSenc','feReg','revisadot22','anulart22'];

        /* FUNCION DE SELECT*/

 public function selectConfiscacion()
    {
        return $this->belongsTo('App\sel_confiscacion', 'codAdq');
    }
}
