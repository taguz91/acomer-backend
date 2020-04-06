<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SaveResponse;
use App\Http\Controllers\ViewResponse;
use App\Http\Controllers\DeleteResponse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use DeleteResponse, SaveResponse, ViewResponse;
}
