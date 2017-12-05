<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloAdjudicacion extends Model
{

use SoftDeletes;

    protected $table = 'adjudicacion';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codOt2_8','codAdq','nomProan','nomBen','nomAuto','numSeAdm','feSeAdm','nomRegn','tomo','folio','feReg','revisadot28'];

      public function selectAdjudicacion()
    {
        return $this->belongsTo('App\sel_adjudicacion', 'codAdq');
    }
}
