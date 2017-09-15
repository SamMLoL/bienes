<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT4 extends Model
{
     protected $table = 'mig_selectT4';

     public function selectT4()
    {
        return $this->hasOne('App\modeloT4', 'tipoResp');
    }
}
