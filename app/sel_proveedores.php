<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_proveedores extends Model
{
    /* Migracion del modelo sel_proveedores para el select ubicado en la tabla T1*/
    protected $table = 'sel_proveedores';

     public function selectT1()
    {
        return $this->hasOne('App\modeloProveedores', 'tipProvee');
    }

    public function selectLocalizacion()
    {
        return $this->hasOne('App\modeloS4', 'localizacion');
    }
}
