<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = 'objetivos';
    protected $primaryKey = 'codigoobj';
    protected $fillable = [
        'codigoobj', 'descripcion', 'proyecto_codigo'
    ];
    public function Proyecto(){
        return $this->belongsTo('App\Proyecto');
    }
}
