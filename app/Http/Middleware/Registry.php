<?php

namespace App\Http\Middleware;

use Closure;

class Registry
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
         if (Auth::check() && Auth::user()->role == 'registry') {
        return $next($request);
    }
         elseif (Auth::check() && Auth::user()->role == 'home') {
        return redirect('/home');
    }
         else{
            return redirect('/');
         }
    
    }
}
