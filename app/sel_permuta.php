<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_permuta extends Model
{
    protected $table = 'sel_permuta';

     public function selectPermuta()
    {
        return $this->hasOne('App\modeloPermuta', 'codAdq');
    }
}
