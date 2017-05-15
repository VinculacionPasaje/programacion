<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table ='categorias';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'nombre',
        'descripcion',
        'estado'
    ];

     public function noticias(){
        return $this->hasMany(Noticia::class);
    }

    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('nombre', "LIKE", "%$table_search%");

       }
        

    }



}
