<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloExpropiacion extends Model
{
    protected $table = 'expropiacion';
    protected $fillable = ['codOt2_5','codAdq','nomPan','nomBen','nomAut','numSena','feSena','nomRegn','tomo','folio','feReg','revisadot25','anulart25'];

    public function selectExpropiacion()
    {
        return $this->belongsTo('App\sel_expropiacion', 'codAdq');
    }
}
