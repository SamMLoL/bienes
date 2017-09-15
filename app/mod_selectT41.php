<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT41 extends Model
{
    protected $table = 'mig_selectT41';

     public function selectT41()
    {
        return $this->hasOne('App\modeloT4', 'depAdmRes');
    }
}
