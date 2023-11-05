<?php

namespace App\Actions\FontAwesome\v6;

use Illuminate\Support\Str;
use Lorisleiva\Actions\Concerns\AsAction;

class GetIconMarkup
{
    use AsAction;

    public function handle(string $fontAwesomeIconClass)
    {
        // GET ICON MARKUP
        try {
            $iconPieces = explode(' ', $fontAwesomeIconClass, 2);
            $iconSet = Str::replace('fa-', '', data_get($iconPieces, 0)) ?: 'solid';
            $icon = Str::replace('fa-', '', data_get($iconPieces, 1)) ?: 'location-dot';
            $iconFilePath = "icons/font-awesome-6/{$iconSet}/{$icon}.svg";
            $iconMarkup = file_get_contents(resource_path($iconFilePath));
        } catch (\Throwable $e) {
            // use default icon markup
            $iconMarkup = file_get_contents(resource_path('icons/font-awesome-6/solid/location-dot.svg'));
        }

        return $iconMarkup;
    }
}
