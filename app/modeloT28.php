<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT28 extends Model
{
    protected $table = 'T28';
    protected $fillable = ['codOt2_8','codAdq','nomProan','nomBen','nomAuto','numSeAdm','feSeAdm','nomRegn','tomo','folio','feReg','revisadot28','anulart28'];

      public function selectT28()
    {
        return $this->belongsTo('App\mod_selectT28', 'codAdq');
    }
}

