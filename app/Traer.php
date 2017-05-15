<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traer extends Model
{
    protected $table ='traer';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'contenido',
        'fecha',
        'contador_visitas',
    ];

    

}
