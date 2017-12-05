<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloDonacion extends Model
{

use SoftDeletes;

    protected $table = 'donacion';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codOt2_4','codAdq','nomDona','nomBen','numConac','feConac','nomRegn','tomo','folio','feReg','revisadot24'];

    public function selectDonacion()
    {
        return $this->belongsTo('App\sel_donacion', 'codAdq');
    }
}
