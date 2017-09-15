<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT21 extends Model
{
     protected $table ='T21';
     protected $fillable = ['codOt2_1','codAdq','codPro','numCom','numNota','numFac','feCom','feNota','feFac','revisadot21','anulart21'];


    /* FUNCION DE SELECT*/

 public function selectT21()
    {
        return $this->belongsTo('App\mod_selectT21', 'codAdq');
    }
}
