<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD:app/Http/Middleware/Registry.php

=======
use Auth;
>>>>>>> 56a9182792a125c26e3900dd6658798b92efa63b:app/Http/Middleware/Registry.php
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
<<<<<<< HEAD:app/Http/Middleware/Registry.php
         elseif (Auth::check() && Auth::user()->role == 'home') {
        return redirect('/home');
    }
=======
         
>>>>>>> 56a9182792a125c26e3900dd6658798b92efa63b:app/Http/Middleware/Registry.php
         else{
            return redirect('/');
         }
    
    }
}
