<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use SoftDeletes;
    
    protected $table = 'reservas';

    protected $fillable = [
        'id_mesa',
        'fecha_reserva', 
        'numero_personas',
        'platos',
        'codigo_qr'
    ];

    public function getPlatosAttribute($value) {
        return json_decode($value, true);
    }

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }

    public function mesa()
    {
        return $this->belongsTo('App\Models\Mesa', 'id_mesa');
    }

    public function cliente() 
    {
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }

}
