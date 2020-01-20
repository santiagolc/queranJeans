<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Closure;

class mustBeLogged
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
        if($request->user()!=null) {
            return $next($request);      
        } if($request->user()==null) {
            echo "Tenes que estar logueado para poder comprar";
        }  
    }
}
