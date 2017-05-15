<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    protected $table='users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'id', 'name','apellido','email','password','path','estado','id_roles',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function rol(){
        return $this->belongsTo(Rol::class,'id_roles','id');
    }


    public function setPathAttribute($path){

        if(!empty($path)){
            if ($path =="eliminar"){
                if ( ! empty($this->attributes['path'])) {
                    \Storage::delete($this->attributes['path']);
                }
                $this->attributes['path']=null;
            }
            else {
                /* Para Actualizar Imagen */
                if ( ! empty($this->attributes['path'])) {
                    \Storage::delete($this->attributes['path']);
                }
                $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
                $name = Carbon::now()->second.$path->getClientOriginalName();
                \Storage::disk('local')->put($name, \File::get($path));
            }
        }

    }

     public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('name', "LIKE", "%$table_search%");

       }
        

    }
}
