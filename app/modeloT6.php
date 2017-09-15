<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloT6 extends Model
{
    protected $table = 'T6';
    protected $fillable = ['codModel','denModFab','codMarca','codSegModel','revisadot6','anulart6'];

    /*  public function selectt5()
    {
        return $this->belongsTo('App\mod_selectT5', 'tipoResp');
    }*/
}
