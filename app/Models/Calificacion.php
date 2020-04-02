<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';

    protected $fillable = [
        'id_fk',
        'id_cliente',
        'calificacion',
        'tipo_calificacion'
    ];
}
