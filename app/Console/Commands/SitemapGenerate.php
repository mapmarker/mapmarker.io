<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapGenerate extends Command
{
    public const EXCLUDE = [
        '_dusk',
        'api',
        'sanctum',
        '_ignition',
        'vapor',
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate the sitemap for the current page';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $routes = array_map(function (\Illuminate\Routing\Route $route) {
            return $route->uri;
        }, (array) Route::getRoutes()->getIterator());

        asort($routes);

        $sitemap = Sitemap::create();

        foreach ($routes as $route) {
            if (! $this->shouldExcludePath($route)) {
                $url = 'https://www.mapmarker.io/';
                if ($route != '/') {
                    $url .= $route;
                }
                $sitemap->add(Url::create($url)->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS));
            }
        }

        $sitemap->writeToFile(resource_path('sitemap.xml'));

        return Command::SUCCESS;
    }

    protected function shouldExcludePath($route)
    {
        foreach (self::EXCLUDE as $pathToExclude) {
            if (Str::startsWith($route, $pathToExclude)) {
                return true;
            }
        }

        return false;
    }
}
