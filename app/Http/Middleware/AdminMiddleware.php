<?php

namespace App\Http\Middleware;

use Closure;

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
        $user = $request->user();

        if ($user) {
            if ($user->id == 1) {
                return $next($request);
            } else {
                return redirect(url('/'));
            }
        }else{
            return redirect(url('/'));
        }

    }
}