<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_paises extends Model
{
    protected $table = 'sel_paises';
    protected $fillable = ['codPais','pais','revisadoAddPais'];

    
    public static function selectPaises(){
         return sel_paises::all();
     }

      public static function modifiquePaises($id){
         return sel_paises::where('pais', $id)->get();
     }

    public function selectPais()
    {
        return $this->hasOne('App\modeloS4', 'codPais');
    }

    public function selectPaisesinmu()
    {
        return $this->hasOne('App\modeloInmuebles', 'codPais');
    }


    
}
