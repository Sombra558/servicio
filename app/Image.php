<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'ima_id';
    protected $fillable = [
        'ima_id', 'img','actividad_id_r','proyecto_id',
    ];
    public function Actividad(){
        return $this->belongsTo('App\Actividad');
    }
}
