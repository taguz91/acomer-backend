<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reporte extends Model
{
    use SoftDeletes;
    
    protected $table = 'reportes';

    protected $fillable = [
        'reporte',
        'nombre'
    ];

    protected $attributes = [
        'fecha' =>  date('Y-m-d H:m:s'
    ];
   

    #tranformar el json en un array
    public function getReporteAttribute($value){
        return json_decode($value,true);
    }

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }
    
}
