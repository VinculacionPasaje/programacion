<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaAlimentacion extends Model
{
    protected $table ='categorias_alimentacion';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'categoria',
        'descripcion',
        'estado',
        'contador_visitas',
    ];

      public function alimentacion(){
        return $this->hasMany(Alimentacion::class);
    }

  
     
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('categoria', "LIKE", "%$table_search%");

       }
        

    }
}
