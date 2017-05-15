<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Mapas extends Model
{
    protected $table ='mapas';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'path',
        'contador_visitas',
        'estado',
        
    ];

    

    public function setPathAttribute($path){

        if(!empty($path)){
            /* Para Actualizar Imagen */
            if(!empty($this->attributes['path'])){
                \Storage::delete($this->attributes['path']);
            }
            $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
            $name = Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }


    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('titulo', "LIKE", "%$table_search%");

       }
    }
}
