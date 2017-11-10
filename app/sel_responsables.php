<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_responsables extends Model
{
    protected $table = 'sel_responsables';

     public function selectResponsables()
    {
        return $this->hasOne('App\modeloResponsables', 'tipoResp');
    }
}
