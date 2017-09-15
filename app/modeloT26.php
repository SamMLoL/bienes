<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT26 extends Model
{
    protected $table = 'T26';
    protected $fillable = ['codOt2_6','codAdq','nomCope','nomBen','nomLic','numLic','feLic','numCon','feCon','nomRegn','tomo','folio','feReg','revisadot26','anulart26'];

      public function selectT26()
    {
        return $this->belongsTo('App\mod_selectT26', 'codAdq');
    }
}
