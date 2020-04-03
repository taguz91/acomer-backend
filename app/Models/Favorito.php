<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';

    protected $fillable = [
        'id_plato',
        'id_cliente', 
    ];

    public function plato()
    {
        return $this->belongsTo('App\Models\Plato', 'id_plato');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }
}
