<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_marca2 extends Model
{
    protected $table = 'sel_marca2';

    protected $fillable = ['opcion','relacion'];

 	//FUncion para la relacion de los select multiples en la vista de registro de marcas ruta web regmarcas
    public static function nomFabricante($id){
        return sel_marca2::where('relacion', $id)->get();
 
      }

    //Relacion para mostrar la informacion en la vista.regMarcas dentro del datatable
     public function selectMarca2()
    {
        return $this->belongsTo('App\modeloRegMarca', 'nomFabri');
    }
    
}
