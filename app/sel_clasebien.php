<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_clasebien extends Model
{
    protected $table = 'sel_clasebien';
    protected $fillable = ['opcion'];

    public function selectClasebien()
    {
        return $this->hasOne('App\modeloEqtransporte', 'claseBien');
    }
}
