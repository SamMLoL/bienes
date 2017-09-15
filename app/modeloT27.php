<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT27 extends Model
{
    protected $table = 'T27';
    protected $fillable = ['codOt2_7','codAdq','nomQtra','nomBen','numAuto','feAuto','nomRegn','tomo','folio','feReg','revisadot27','anulart27'];

      public function selectT27()
    {
        return $this->belongsTo('App\mod_selectT27', 'codAdq');
    }
}
