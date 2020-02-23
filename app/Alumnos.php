<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'cedula';
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'horas_acumuladas','proyecto_id',
    ];
    public function Proyecto(){
        return $this->belongsTo('App\Proyecto');
    }
}
