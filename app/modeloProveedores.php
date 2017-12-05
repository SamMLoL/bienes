<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class modeloProveedores extends Model
{   

use SoftDeletes;

    protected $table ='proveedores';

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
    'codProvee','descProvee','tipProvee','rifProvee','otraDesc','revisadot1'];


     public function selectProvee()
    {
        return $this->belongsTo('App\sel_proveedores', 'tipProvee');
    }

     public function selectCodProvee()
    {
        return $this->hasOne('App\modeloDirecta', 'codProvee');
    }
}
