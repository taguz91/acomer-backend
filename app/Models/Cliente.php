<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'identificacion',
        'telefono',
    ];

    public function favoritos()
    {
        return $this->hasMany('App\Models\Favorito', 'id_cliente');
    }

    public function platos()
    {
        return $this->belongsToMany('App\Models\Plato', 'favoritos', 'id_cliente', 'id_favorito');
    }

    public function facturas()
    {
        return $this->hasMany('App\Models\EncabezadoFactura', 'id_cliente');
    }

    public function sugerencias()
    {
        return $this->hasMany('App\Models\Sugerencia', 'id_sugerencia');
    }

}
