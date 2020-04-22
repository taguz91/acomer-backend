<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'clave',
        'correo',
        'tipo_usuario',
        'intentos_login',
        'numero_logins',
    ];

    protected $hidden = [
        'clave'
    ];

    public function historial(){
        return $this->hasMany('App\Models\HistorialUsuario', 'id_usuario');
    }

    public function cliente(){
        return $this->hasOne('App\Models\Cliente', 'id_usuario');
    }

    public function empleado(){
        return $this->hasOne('App\Models\Empleado', 'id_usuario');
    }

    public function administrador(){
        return $this->hasOne('App\Models\Administrador', 'id_usuario');
    }

    public function restaraunte()
    {
        return $this->hasOne('App\Models\Restaurante', 'id_usuario');
    }

}
