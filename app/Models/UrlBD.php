<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UrlBD extends Model
{
    use SoftDeletes;

    protected $table = 'urls';

    protected $fillable = [
        'plataforma',
        'url',
        'permisos'
    ];

}
