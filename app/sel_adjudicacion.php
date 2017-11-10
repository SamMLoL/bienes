<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_adjudicacion extends Model
{
    protected $table = 'sel_adjudicacion';

    public function selectAdjudicacion()
    {
        return $this->hasOne('App\modeloAdjudicacion', 'codAdq');
    }
}
