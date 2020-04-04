<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sugerencia extends Model
{
    use SoftDeletes;
    
    protected $table = 'sugerencias';

    protected $fillable = [
        'id_cliente',
        'sugerencia'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }

}
