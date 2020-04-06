<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Combo extends Model
{
    use SoftDeletes;

    protected $table = 'combos';

    protected $fillable = [
        'platos',
        'precio_final',
        'extra'
    ];

    public function getPlatosAttribute($value) {
        return json_decode($value);
    }

    public function getExtraAttribute($value) {
        return json_decode($value);
    }

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'calificado');
    }
    
}
