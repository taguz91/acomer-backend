<?php

namespace App\Models;

use Dotenv\Loader\Value;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';

    protected $fillable = [
        'reporte',
        'nombre'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    #tranformar el json en un array
    public function getReporteAttribute($value){
        return json_decode($value,true);
    }

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
}
