<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    
    protected $table = 'clientes';

    protected $fillable = [
        'id_usuario',
        'nombre',
        'apellido',
        'identificacion',
        'telefono',
    ];

    protected $attributes = [
        'numero_compras' => 0,
        'total_consumos' => 0,
    ];

    public function favoritos()
    {
        return $this->hasMany('App\Models\Favorito', 'id_cliente');
    }

    public function platos()
    {
        return $this->belongsToMany('App\Models\Plato', 'favoritos', 'id_plato', 'id_cliente');
    }

    public function facturas()
    {
        return $this->hasMany('App\Models\EncabezadoFactura', 'id_cliente');
    }

    public function sugerencias()
    {
        return $this->hasMany('App\Models\Sugerencia', 'id_cliente');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }

}
