<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheMiddleware
{
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
        if (! Cache::has($key)) {
            $value = $next($request)->withHeaders([
                'X-Vapor-Base64-Encode' => 'True',
                'Cache-Control' => 'max-age=2592000, public',
            ]);
            Cache::put($key, $value);
        }

        return Cache::get($key);
    }
}
