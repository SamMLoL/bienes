<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloDonacion extends Model
{
    protected $table = 'donacion';
    protected $fillable = ['codOt2_4','codAdq','nomDona','nomBen','numConac','feConac','nomRegn','tomo','folio','feReg','revisadot24','anulart24'];

    public function selectDonacion()
    {
        return $this->belongsTo('App\sel_donacion', 'codAdq');
    }
}
