<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuDia extends Model
{
    use SoftDeletes;
    
    protected $table = 'menu_dia';

    protected $fillable = [
        'id_restaurante',
        'menu_dia',
        'fechas'
    ];

    public function getMenuDiaAttribute($value){
        return json_decode($value, true);
    }

    public function restaurante(){
        return $this->belongsTo('App\Models\Restaurante', 'id_restaurante');
    }

}
