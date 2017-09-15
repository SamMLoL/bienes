<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT33 extends Model
{
    protected $table = 'mig_selectT33';

     public function selectT33()
    {
        return $this->hasOne('App\modeloT3', 'poseRes');
    }
}
