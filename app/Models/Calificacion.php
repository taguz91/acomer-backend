<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calificacion extends Model
{
    use SoftDeletes;
    
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
