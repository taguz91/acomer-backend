<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuDia extends Model
{
    protected $table = 'menu_dia';

    protected $fillable = [
        'menu_dia'

    ];

    public function getMenuDiaAttribute($value){
        return json_decode($value,true);
    }
}
