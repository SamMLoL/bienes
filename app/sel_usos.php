<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_usos extends Model
{
    protected $table = 'sel_usos';
    protected $fillable = ['opcion'];

    public function selectUsoninmu()
    {
        return $this->hasOne('App\modeloInmuebles', 'usoBienInmu');
    }
}
