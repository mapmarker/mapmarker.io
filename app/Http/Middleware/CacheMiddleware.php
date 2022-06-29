<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheMiddleware
{
    const TTL_DAYS = 7 * 86400;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $key = md5($request->fullUrl());

        return Cache::remember($key, self::TTL_DAYS, fn () => $next($request)->withHeaders([
            'X-Vapor-Base64-Encode' => 'True',
            'Cache-Control' => 'max-age=2592000, public',
        ]));
    }
}
