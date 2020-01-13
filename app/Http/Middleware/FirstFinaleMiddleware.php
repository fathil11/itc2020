<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class FirstFinaleMiddleware
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
        if (Auth::user()->role == 'participant'){
            return $next($request);
        }
        return redirect(url('/home'));
    }
}
