<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_marca2 extends Model
{
    protected $table = 'sel_marca2';

      protected $fillable = ['opcion','codMarca_id','anularMarca'];

 
    public static function nomFabricante($id){
         return sel_marca2::where('codMarca_id', $id)->get();

      }

  	public function selectMarca2()
    {
        return $this->hasOne('App\modeloRegMarca', 'nomFabri');
    }
}
