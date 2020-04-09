<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    
    protected $table = 'categorias';

    protected $fillable = [
       'nombre',
       'numero_platos',
       'id_restaurante' 
    ];

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }

    public function platos()
    {
        return $this->hasMany('App\Models\Plato', 'id_categoria');
    }

    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_categoria');
    }
    
}
