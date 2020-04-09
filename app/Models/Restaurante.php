<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurante extends Model
{

    use SoftDeletes;
    
    protected $table = 'restaurantes';

    protected $fillable = [
        'nombre_comercial',
        'nombre_fiscal',
        'id_usuario'
    ];

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }

    public function categorias()
    {
        return $this->hasMany('App\Models\Categoria', 'id_restaurante');
    }

    public function combos()
    {
        return $this->hasMany('App\Models\Combo', 'id_restaurante');
    }

    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'id_restaurante');
    }

    public function encabezado_facturas()
    {
        return $this->hasMany('App\Models\EncabezadoFactura', 'id_restaurante');
    }

    public function menus()
    {
        return $this->hasMany('App\Models\Menu', 'id_restaurante');
    }

    public function menus_dia()
    {
        return $this->hasMany('App\Models\MenuDia', 'id_restaurante');
    }

    public function mesas()
    {
        return $this->hasMany('App\Models\Mesa', 'id_restaurante');
    }

    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'id_restaurante');
    }

    public function platos()
    {
        return $this->hasMany('App\Models\Plato', 'id_restaurante');
    }

    public function promociones()
    {
        return $this->hasMany('App\Models\Promocion', 'id_restaurante');
    }

    public function reportes()
    {
        return $this->hasMany('App\Models\Reporte', 'id_restaurante');
    }

    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'id_restaurante');
    }

    public function sucursales()
    {
        return $this->hasMany('App\Models\Surcursal', 'id_restaurante');
    }

    public function sugerencias()
    {
        return $this->hasMany('App\Models\Sugerencia', 'id_restaurante');
    }

    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'calificado');
    }
    
}
