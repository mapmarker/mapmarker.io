<?php

namespace App\Http\Controllers\API\v3\FontAwesome\v6;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IconController extends Controller
{
    public function show(Request $request)
    {
        // GET ICON MARKUP
        try {
            $icon = $request->get('icon', '');
            $iconPieces = explode(' ', $icon, 2);
            $iconSet = Str::replace('fa-', '', data_get($iconPieces, 0)) ?: 'solid';
            $icon = Str::replace('fa-', '', data_get($iconPieces, 1)) ?: 'location-dot';
            $iconFilePath = "icons/font-awesome-6/{$iconSet}/{$icon}.svg";
            $iconMarkup = file_get_contents(resource_path($iconFilePath));
        } catch (\Throwable $e) {
            // use default icon markup
            $iconMarkup = file_get_contents(resource_path('icons/font-awesome-6/solid/location-dot.svg'));
        }

        // GET ICON SIZE
        $size = $request->get('size', 100);

        // GET ICON COLOR
        $color = $request->get('color', '#333');

        // GET LABEL
        $labelText = $request->get('label');
        $labelTextSize = $size / 5;
        $labelColor = $request->get('labelColor', '#D9534F');
        $labelFont = $request->get('labelFont', 'Arial');
        $labelMarkup = '';
        if ($labelText) {
            $labelMarkup = <<<EOD
            <!--! Icon Label -->
            <svg x="60%" y="60%" width="40%" height="40%" viewbox="0 0 100 100">
                <circle cx="50%" cy="50%" fill="{$labelColor}" r="50%" />
                <text x="50%" y="50%" fill="#fff" text-anchor="middle" dy=".3em" font-size="{$labelTextSize}" font-family="{$labelFont}">{$labelText}</text>
            </svg>
            EOD;
        }

        // COMPOSE MARKUP
        $mapMarkerMarkup = <<<EOD
        <svg fill="{$color}" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" width="{$size}" height="{$size}">
            <!--! Generated with MapMarker.io - https://mapmarker.io License - https://www.mapmarker.io/license -->
            {$iconMarkup} {$labelMarkup}
        </svg>
        EOD;

        return response($mapMarkerMarkup)->header('Content-Type', 'image/svg+xml');
    }
}
