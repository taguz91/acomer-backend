<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use SoftDeletes;

    protected $table = 'empleados';

    protected $fillable = [
        'id_restaurante',
        'id_usuario',
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
