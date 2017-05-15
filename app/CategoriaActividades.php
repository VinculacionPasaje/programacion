<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaActividades extends Model
{
    protected $table ='categorias_actividades';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'categoria',
        'descripcion',
        'estado',
        'contador_visitas',
    ];

     public function actividades(){
        return $this->hasMany(Actividades::class);
    }

    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('categoria', "LIKE", "%$table_search%");

       }
        

    }
    
}
