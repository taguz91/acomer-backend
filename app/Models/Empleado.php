<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'apellido',
        'identificacion',
        'id_rol',
        'foto_url',
    ];

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'id_cliente');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
}
