<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table ='roles';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'nombre',
        'descripcion',
    ];

}
