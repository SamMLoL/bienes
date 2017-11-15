<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_marca1 extends Model
{
    protected $table = 'sel_marca1';

    protected $fillable = ['opcion','relacion'];
       
    public static function denCoMarcas($id){
    return sel_marca1::where('relacion', $id)->get();

      }

   
    //Relacion para mostrar la informacion en el historico de marcas dentro del datatable
    public function sel_marca2()
    {
        return $this->hasOne('App\sel_marca2', 'relacion');
    }
 
}
