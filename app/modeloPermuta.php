<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloPermuta extends Model
{

use SoftDeletes;

    protected $table = 'permuta';

    protected $dates = ['deleted_at'];
    
    protected $fillable = ['codOt2_6','codAdq','nomCope','nomBen','nomLic','numLic','feLic','numCon','feCon','nomRegn','tomo','folio','feReg','revisadot26'];

      public function selectPermuta()
    {
        return $this->belongsTo('App\sel_permuta', 'codAdq');
    }
}
