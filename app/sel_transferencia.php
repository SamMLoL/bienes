<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_transferencia extends Model
{
    protected $table = 'sel_transferencia';

     public function selectTransferencia()
    {
        return $this->hasOne('App\modeloTransferencia', 'codAdq');
    }
}
