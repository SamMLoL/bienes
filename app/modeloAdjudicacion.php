<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloAdjudicacion extends Model
{
    protected $table = 'adjudicacion';
    protected $fillable = ['codOt2_8','codAdq','nomProan','nomBen','nomAuto','numSeAdm','feSeAdm','nomRegn','tomo','folio','feReg','revisadot28','anulart28'];

      public function selectAdjudicacion()
    {
        return $this->belongsTo('App\sel_adjudicacion', 'codAdq');
    }
}
