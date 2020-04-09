<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolUrl extends Model
{
    use SoftDeletes;

    protected $table = 'rol_urls';

    protected $fillable = [
        'id_rol',
        'id_url'
    ];
}
