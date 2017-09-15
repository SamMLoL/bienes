<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT31 extends Model
{
   protected $table = 'mig_selectT31';

     public function selectT31()
    {
        return $this->hasOne('App\modeloT3', 'tipPoli');
    }
}
