<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modeloDacion extends Model
{

use SoftDeletes;

    protected $table = 'dacionPago';

    protected $dates = ['deleted_at'];

    protected $fillable = ['codOt2_3','codAdq','nomCed','nomBen','numFin','feFin','nomRegn','tomo','folio','feReg','revisadot23','anulart23'];

          /* FUNCION DE SELECT*/

 public function selectDacion()
    {
        return $this->belongsTo('App\sel_dacion', 'codAdq');
    }
}
