<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT52 extends Model
{
      protected $table = 'mig_selectT52';

      protected $fillable = ['opcion','codMarca_id'];

 
    public static function nomFabricante($id){
         return mod_selectT52::where('codMarca_id', $id)->get();

      }

  	public function selectT52()
    {
        return $this->hasOne('App\modeloT5', 'nomFabri');
    }
    
}