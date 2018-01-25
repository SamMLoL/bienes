<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_medidapeso extends Model
{
    protected $table = 'sel_medidapeso';
    protected $fillable = ['opcion'];

    public function selectPesosemo()
    {
        return $this->hasOne('App\modeloSemovientes', 'unidadPeso');
    }
}
