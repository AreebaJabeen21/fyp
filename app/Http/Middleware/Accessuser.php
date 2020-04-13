<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Accessuser
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
       
        if(Auth::user()->role=='Donor'){
         return $next($request);

        }
        else if(Auth::user()->role == 'admin'){
            return redirect('/admin');
        }
        else{
            return redirect('/product');
        }
    }
}
