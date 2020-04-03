<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';

    protected $fillable = [
        'reporte',
        'nombre'
    ];

   

    #tranformar el json en un array
    public function getReporteAttribute($value){
        return json_decode($value,true);
    }
}
