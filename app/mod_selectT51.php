<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mod_selectT51 extends Model
{
      protected $table = 'mig_selectT51';

      protected $fillable = ['opcion','marca_id'];
       
      public static function denCoMarcas($id){
         return mod_selectT51::where('marca_id', $id)->get();

      }

  public function selectT51()
    {
        return $this->hasOne('App\modeloT5', 'denCoMar');
    }

}
