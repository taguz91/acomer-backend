<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sucursal extends Model
{
    use SoftDeletes;
    
    protected $table = 'sucursales';

    protected $fillable = [
        'id_restaurante',
        'horario_atencion',
        'numero',
        'direccion',
        'latitud',
        'longitud',
    ];

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
}
