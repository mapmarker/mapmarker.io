<?php

namespace Tests\Feature\app\Http\Middleware;

use Tests\TestCase;

class CloudflareCacheHeaderMiddlewareTest extends TestCase
{
    private function markerEndpointDataProvider()
    {
        return [
            // legacy
            ['api/v1/pin'],
            ['api/v1/fa'],
            ['api/v1/fa/stack'],
            // v1
            ['api/v1/font-awesome/v4/pin'],
            ['api/v1/font-awesome/v4/icon'],
            ['api/v1/font-awesome/v4/icon-stack'],
            ['api/v1/font-awesome/v5/pin'],
            ['api/v1/font-awesome/v5/icon'],
            ['api/v1/font-awesome/v5/icon-stack'],
            // v2
            ['api/v2/font-awesome/v5/pin'],
            ['api/v2/font-awesome/v5/icon'],
            ['api/v2/font-awesome/v5/icon-stack'],
        ];
    }

    /**
     * @dataProvider markerEndpointDataProvider
     */
    public function test_handle_sets_cache_for_api_endpoints($uri)
    {
        $response = $this->get($uri);
        $this->assertEquals('max-age=60, public, s-maxage=60', $response->headers->get('cache-control'), 'resource should be declared public for cloudflare to cache');
    }

    private function pageDataProvider()
    {
        return [
            ['/'],
            ['documentation'],
            ['changelog'],
            ['license'],
        ];
    }

    /**
     * @dataProvider pageDataProvider
     */
    public function test_handle_does_not_set_cache_for_page_endpoints($uri)
    {
        $response = $this->get($uri);
        $this->assertEquals('no-cache, private', $response->headers->get('cache-control'), 'resource should be declared public for cloudflare to cache');
    }
}
