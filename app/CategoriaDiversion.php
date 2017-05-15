<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaDiversion extends Model
{
    protected $table ='categorias_diversion';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'categoria',
        'descripcion',
        'estado',
        'contador_visitas',
    ];

    public function diversion(){
        return $this->hasMany(Diversion::class);
    }

  
     
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('categoria', "LIKE", "%$table_search%");

       }
        

    }
}
