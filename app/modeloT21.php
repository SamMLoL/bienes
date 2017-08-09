<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT21 extends Model
{
     protected $table ='T21';
     protected $fillable = ['codOt2_1','codAdq','codPro','numCom','feCom','numNota','feNota','numFac','feFac','revisadot21','anulart21'];


     public function selectt21()
    {
        return $this->belongsTo('App\mod_selectT21', 'codAdq');
    }
}
