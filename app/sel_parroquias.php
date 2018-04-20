<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_parroquias extends Model
{
    protected $table = 'sel_parroquias';
    protected $fillable = ['codParroquia','parroquia'];

     
    public function selectParroquia()
    {
        return $this->hasOne('App\modeloS4', 'codParroquia');
    }

    public function selectParroinmu()
    {
        return $this->hasOne('App\modeloInmuebles', 'codParroquia');
    }

}
