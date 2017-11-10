<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloTransferencia extends Model
{
    protected $table = 'transferencia';
    protected $fillable = ['codOt2_7','codAdq','nomQtra','nomBen','numAuto','feAuto','nomRegn','tomo','folio','feReg','revisadot27','anulart27'];

      public function selectTransferencia()
    {
        return $this->belongsTo('App\sel_transferencia', 'codAdq');
    }
}
