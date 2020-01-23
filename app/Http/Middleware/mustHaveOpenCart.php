<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Cart;

use Closure;

class mustHaveOpenCart
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
        if(\Auth::check()) {
            if(Cart::where('user_id', \Auth::id())-> where('status', "=", 1)->get()){
                return $next($request);     
            } else {
                return redirect("/");
            }
        } else {
            return redirect("/");
        } 
    }
}
