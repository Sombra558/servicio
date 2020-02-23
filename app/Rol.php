<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rols';
    protected $primaryKey = 'rol_id';
    protected $fillable = [
        'rol_id', 'nombre_rol'
    ];
    public function Usuarios(){
        return $this->hasMany('App\User');
    }
}
