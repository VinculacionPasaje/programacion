<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaHospedaje extends Model
{
     protected $table ='categorias_hospedaje';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'categoria',
        'descripcion',
        'estado',
        'contador_visitas',
    ];

    public function hospedaje(){
        return $this->hasMany(Hospedaje::class);
    }

  
     
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('categoria', "LIKE", "%$table_search%");

       }
        

    }
}
