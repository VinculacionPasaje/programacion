<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table ='videos';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'url',
        
    ];
}
