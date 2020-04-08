<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocion extends Model
{
    use SoftDeletes;
    
    protected $table = 'promociones';

    protected $fillable = [
        'id_fk',
        'tipo_promocion',
        'precio',
        'descuento',
        'extra',
    ];

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
}
