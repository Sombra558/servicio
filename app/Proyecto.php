<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $primaryKey = 'codigo';
    protected $fillable = [
        'codigo', 'titulo', 'objGeneral','carrera','tipo','inicio','fin','comunidad','tutor_id','estado'
    ];
    public function Objetivos(){
        return $this->hasMany('App\Objetivo');
    }
    public function tutor(){
        return $this->belongsTo('App\User');
    }
    public function Actividades(){
        return $this->hasMany('App\Actividad');
    }
    public function Alumnos(){
        return $this->hasMany('App\Alumno');
    }
}
