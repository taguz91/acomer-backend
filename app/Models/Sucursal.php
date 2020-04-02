<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    protected $fillable = [
        'id_restaurante',
        'horario_atencion',
        'numero',
        'direccion',
        'latitud',
        'longitud',
    ];
}
