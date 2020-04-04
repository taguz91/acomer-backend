<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrador extends Model
{
    use SoftDeletes;
    
    protected $table = 'administradores';

    protected $fillable = [];

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
    
}
