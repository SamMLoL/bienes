<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloDacion extends Model
{
    protected $table = 'dacionPago';
    protected $fillable = ['codOt2_3','codAdq','nomCed','nomBen','numFin','feFin','nomRegn','tomo','folio','feReg','revisadot23','anulart23'];

          /* FUNCION DE SELECT*/

 public function selectDacion()
    {
        return $this->belongsTo('App\sel_dacion', 'codAdq');
    }
}
