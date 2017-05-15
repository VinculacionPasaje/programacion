<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table ='material';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'contenido',
        'fecha',
        'contador_visitas',
    ];
}
