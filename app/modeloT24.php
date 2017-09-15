<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT24 extends Model
{
    protected $table = 'T24';
    protected $fillable = ['codOt2_4','codAdq','nomDona','nomBen','numConac','feConac','nomRegn','tomo','folio','feReg','revisadot24','anulart24'];

    public function selectT24()
    {
        return $this->belongsTo('App\mod_selectT24', 'codAdq');
    }
}
