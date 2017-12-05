<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloConfiscacion extends Model
{

use SoftDeletes;
  
    protected $table = 'confiscacion';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codOt2_2','codAdq','nomPa','nomBen','nomAuto','numSenc','nomRegno','tomo','folio','feSenc','feReg','revisadot22'];

        /* FUNCION DE SELECT*/

 public function selectConfiscacion()
    {
        return $this->belongsTo('App\sel_confiscacion', 'codAdq');
    }
}
