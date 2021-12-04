<?php

namespace App\Http\Middleware;

use Closure;

class SimpleTokenMiddleware
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
        if ( $request->bearerToken() !== 'kelompok_2_token') {
            return response(['Unauthorized'], 401);
        }

        return $next($request);
    }
}