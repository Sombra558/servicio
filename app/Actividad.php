<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividads';
    protected $primaryKey = 'actividad_id';
    protected $fillable = [
        'actividad_id', 'descripcion', 'horas_asignadas', 'proyecto_id',
    ];
    public function Proyecto(){
        return $this->belongsTo('App\Proyecto');
    }
    public function Imagenes(){
        return $this->hasMany('App\Actividad');
    }
}
