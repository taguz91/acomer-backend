<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    
    protected $table = 'administradores';

    protected $fillable = [];

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
    
}
