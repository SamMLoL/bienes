<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class modeloTransferencia extends Model
{
use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $table = 'transferencia';
    
    protected $fillable = ['codOt2_7','codAdq','nomQtra','nomBen','numAuto','feAuto','nomRegn','tomo','folio','feReg','revisadot27','anulart27'];

      public function selectTransferencia()
    {
        return $this->belongsTo('App\sel_transferencia', 'codAdq');
    }
}
