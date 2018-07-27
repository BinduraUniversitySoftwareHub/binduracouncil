<?php

namespace App\Http\Middleware;

use Closure;

class DepartmentHead
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
         if (Auth::check() && Auth::user()->role == 'head') {
        return $next($request);
    }
         elseif (Auth::check() && Auth::user()->role == 'secretary') {
        return redirect('/secretary');
    }
         else{
            return redirect('/');
         }
    
    }
}
