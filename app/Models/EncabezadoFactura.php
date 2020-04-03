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

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }

    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido', 'id_pedido');
    }
    
}
