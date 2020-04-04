<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';

    protected $fillable = [
        'id_fk',
        'id_cliente',
        'calificacion',
        'tipo_calificacion'
    ];

    public function calificado() {
        $this->morphTo();
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }

}
