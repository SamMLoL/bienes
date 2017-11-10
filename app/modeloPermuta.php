<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloPermuta extends Model
{
    protected $table = 'permuta';
    protected $fillable = ['codOt2_6','codAdq','nomCope','nomBen','nomLic','numLic','feLic','numCon','feCon','nomRegn','tomo','folio','feReg','revisadot26','anulart26'];

      public function selectPermuta()
    {
        return $this->belongsTo('App\sel_permuta', 'codAdq');
    }
}
