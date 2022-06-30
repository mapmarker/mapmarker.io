<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CloudflareCacheHeaderMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        /** @var Response $response */
        $response = $next($request);

        if (auth()->check() || $this->hasForms($response)) {
            // Don't cache anything
            $response->setCache(['private' => true, 'max_age' => 0, 's_maxage' => 0, 'no_store' => true]);
        } else {
            // Cache all responses for 1 minute
            $response->setCache(['public' => true, 'max_age' => 60, 's_maxage' => 60]);

            // Remove all cookies
            foreach ($response->headers->getCookies() as $cookie) {
                $response->headers->removeCookie($cookie->getName());
            }
        }

        return $response;
    }

    /** @param  Response|ResponseFactory  $response */
    protected function hasForms($response): bool
    {
        $content = strtolower($response->getContent());

        return Str::of($content)->contains('<input type="hidden" name="_token"');
    }
}
