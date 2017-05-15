<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llegar extends Model
{
    protected $table ='llegar';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'script',
        'contenido',
        'contador_visitas',
        'estado',
       
    ];

     public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('titulo', "LIKE", "%$table_search%");

       }
    }
}
