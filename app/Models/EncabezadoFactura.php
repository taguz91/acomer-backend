<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EncabezadoFactura extends Model
{
    protected $table = 'encabezado_facturas';

    protected $fillable = [
        'id_cliente',
        'id_pedido',
        'total',
        'nombre',
        'direccion',
        'telefono',
        'identificacion',
    ];
}
