<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT27 extends Model
{
    protected $table = 'mig_selectT27';

     public function selectT27()
    {
        return $this->hasOne('App\modeloT27', 'codAdq');
    }
}
