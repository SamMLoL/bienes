<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT34 extends Model
{
     protected $table = 'mig_selectT34';

     public function selectT34()
    {
        return $this->hasOne('App\modeloT3', 'tipoCobe');
    }
}
