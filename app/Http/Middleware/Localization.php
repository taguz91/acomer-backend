<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Localization
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
        // Obtenemos el header para saber la localizacion 
        $local = ($request->hasHeader('X-localization')) ? 
            $request->header('X-localization') : 'es';
        // Cambiamos el idioma de la app para obtenr los request
        if (in_array($local, [
            'en', 
            'es'
        ])) {
            App::setLocale($local);
        }
        
        return $next($request);
    }
}
