<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_parroquias extends Model
{
    protected $table = 'sel_parroquias';
    protected $fillable = ['codParroquia','parroquia'];

    public static function selectParroquias(){
         return sel_parroquias::all();
     }



     public static function modifiqueParroquias($id){
         return sel_parroquias::all('parroquia', $id)->get();
     }

    public function selectParroquia()
    {
        return $this->hasOne('App\modeloS4', 'codParroquia');
    }

}
