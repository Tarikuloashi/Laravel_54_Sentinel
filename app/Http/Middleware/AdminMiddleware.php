<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
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
        // 1. user should be authentication
        // 2.Authenticated user should admin
        
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='admin') 
            // \Log::info('role', ['role'=>Sentinel::getUser()->roles()->first()]);
            return $next($request);
        else
            return redirect('/');
    }
}
