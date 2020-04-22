<?php

namespace App\Http\Middleware;

use Closure;

class VerifyToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = ($request->hasHeader('X-token')) ? 
            $request->header('X-token') : 'no-token';
        if ($token == 'no-token') {
            return response()->json([
                'status' => 403,
                'mensaje' => 'Acceso denegado a este lugar tan great...'
            ], 413);
        }

        if ($token != '123') {
            return response()->json([
                'status' => 400,
                'mensaje' => 'Esa no es la clave maestra BROTHER'
            ], 400);
        }

        return $next($request);
    }
}
