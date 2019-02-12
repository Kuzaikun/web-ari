<?php

namespace App\Http\Middleware;

use Closure;

class AboutMiddleware
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
        // echo "Request: ".$next($request); For testing
        return $next($request);
    }
}
