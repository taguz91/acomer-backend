<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'id_mesa',
        'fecha_reserva', 
        'numero_personas',
        'platos',
        'codigo_qr'
    ];

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }

    public function mesa()
    {
        return $this->belongsTo('App\Models\Mesa', 'id_mesa');
    }

}
