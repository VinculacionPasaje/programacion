<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
     protected $table ='preguntas';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'pregunta',
        'respuesta',
        'estado',
      
    ];

    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('pregunta', "LIKE", "%$table_search%");

       }
    }
}
