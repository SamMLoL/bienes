<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloExpropiacion extends Model
{

use SoftDeletes;

    protected $table = 'expropiacion';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codOt2_5','codAdq','nomPan','nomBen','nomAut','numSena','feSena','nomRegn','tomo','folio','feReg','revisadot25'];

    public function selectExpropiacion()
    {
        return $this->belongsTo('App\sel_expropiacion', 'codAdq');
    }
}
