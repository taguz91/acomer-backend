<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table = 'platos';

    protected $fillable = [
        'nombre',
        'precio',
        'ingredientes',
        'url_imagen',
    ];

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'calificado');
    }

    public function favoritos()
    {
        return $this->hasMany('App\Models\Favorito', 'id_cliente');
    }

    public function clientes()
    {
        return $this->belongsToMany('App\Models\Cliente', 'favoritos', 'id_plato', 'id_cliente');
    }
    
}
