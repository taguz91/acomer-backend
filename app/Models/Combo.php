<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $table = 'combos';

    protected $fillable = [
        'id_platos',
        'precio_final',
        'extra'
    ];
}
