<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;

class ReturnFromCacheIfKeyExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $recurso = implode(":", $request->segments());
        if ($request->method() == "GET") {
            if (Redis::get($recurso)) {
                return Redis::set($recurso);
            }
        }
        return $next($request);
    }
}
