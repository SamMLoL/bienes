<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT25 extends Model
{
    protected $table = 'T25';
    protected $fillable = ['codOt2_5','codAdq','nomPan','nomBen','nomAut','numSena','feSena','nomRegn','tomo','folio','feReg','revisadot25','anulart25'];

    public function selectT25()
    {
        return $this->belongsTo('App\mod_selectT25', 'codAdq');
    }
}
