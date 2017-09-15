<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT3 extends Model
{
     protected $table = 'mig_selectT3';

     public function selectT3()
    {
        return $this->hasOne('App\modeloT3', 'compAse');
    }
}
