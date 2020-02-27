<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloqueoactividad extends Model
{
    protected $table = 'bloqueoactividads';
    protected $primaryKey = 'id';
    protected $fillable = [
         'proyecto_id','alumno_id','actividad_id_r',
    ];
    public function Proyecto(){
        return $this->belongsTo('App\Proyecto');
    }
    public function Actividad(){
        return $this->belongsTo('App\Actividad');
    }
    public function Alumno(){
        return $this->belongsTo('App\Alumnos');
    }
}
