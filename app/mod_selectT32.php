<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT32 extends Model
{
    protected $table = 'mig_selectT32';

     public function selectT32()
    {
        return $this->hasOne('App\modeloT3', 'moneda');
    }
}
