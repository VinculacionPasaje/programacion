<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redes extends Model
{
     protected $table ='redes';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'url',
        'descripcion',
        
    ];
}
