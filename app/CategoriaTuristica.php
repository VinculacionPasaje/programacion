<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaTuristica extends Model
{
    protected $table ='categorias_turistico';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'categoria',
        'descripcion',
        'estado',
        'contador_visitas',
    ];

    public function turistico(){
        return $this->hasMany(Turistico::class);
    }

     
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('categoria', "LIKE", "%$table_search%");

       }
        

    }
}
