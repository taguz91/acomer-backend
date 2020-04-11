<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $table = 'productos';

    protected $fillable = [
        'id_restaurante',
        'id_categoria',
        'nombre',
        'stock',
        'precio',
        'url_imagen'
    ];

    public function categoria() {
        return $this->belogsTo('App\Models\Categoria', 'id_categoria');
    }

    public function restaurante()
    {
        return $this->hasOne('App\Models\Restaurante', 'id', 'id_restaurante');
    }

}
