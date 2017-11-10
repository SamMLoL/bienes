<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloProveedores extends Model
{
      protected $table ='proveedores';
      protected $fillable = [
    'codProvee','descProvee','tipProvee','rifProvee','otraDesc','revisadot1','anuladot1'
    ];


     public function selectProvee()
    {
        return $this->belongsTo('App\sel_proveedores', 'tipProvee');
    }
}
