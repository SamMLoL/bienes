<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloBitacora extends Model
{
    protected $table = 'bitacora';
    protected $fillable = ['user','accion','referencia'];

   //Función para mostrar la bitacora de las acciones de cada usuarios tabla BD: bitacora , acciones.
    public function users()
    {
        return $this->belongsTo('App\User', 'user');
    }

    public function acciones()
    {
        return $this->belongsTo('App\modeloAcciones', 'accion');
    }

}
