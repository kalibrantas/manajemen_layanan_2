<?php

namespace App\Http\Middleware;

use Closure;
use App\UserAccessToken;

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
        $user = UserAccessToken::where('token', '=', $request->bearerToken())->first();
        if ($user==null) {
            return response(['Unauthorized'], 401);
        }

        return $next($request);
    }
}