<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT28 extends Model
{
   protected $table = 'mig_selectT28';

    public function selectT28()
    {
        return $this->hasOne('App\modeloT28', 'codAdq');
    }
}
