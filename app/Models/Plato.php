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
}