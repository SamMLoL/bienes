<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_marca1 extends Model
{
    protected $table = 'sel_marca1';

      protected $fillable = ['opcion','marca_id','anularMarca'];
       
       public static function denCoMarcas($id){
         return sel_marca1::where('marca_id', $id)->get();

      }

  public function selectMarca1()
    {
        return $this->hasOne('App\modeloRegMarca', 'denCoMar');
    }
}
