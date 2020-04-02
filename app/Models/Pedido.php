<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'id_empleado',
        'id_mesa',
        'platos',
        'notas'
    ];
}
