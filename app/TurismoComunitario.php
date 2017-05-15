<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurismoComunitario extends Model
{
    protected $table ='turismo_comunitario';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'contenido',
        'fecha',
        'contador_visitas',
    ];
}
