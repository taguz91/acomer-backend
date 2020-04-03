<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $table = 'combos';

    protected $fillable = [
        'id_platos',
        'precio_final',
        'extra'
    ];

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'calificado');
    }
    
}
