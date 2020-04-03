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

    public function getNotasAttribute($value){
        return json_decode($value,true);
    }

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }

    public function mesa()
    {
        return $this->belongsTo('App\Models\Mesa', 'id_mesa');
    }

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado', 'id_empleado');
    }

    public function facturas()
    {
        return $this->hasMany('App\Models\EncabezadoFactura', 'id_pedido');
    }

}
