<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
     protected $table ='footer';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'telefono',
        'fax',
        'direccion',
        'web',
        'anio',
        'email',
        'estado',
        
    ];
}
