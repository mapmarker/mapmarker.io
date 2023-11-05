<?php

namespace App\Http\Controllers\API\v3\FontAwesome\v6;

use App\Actions\FontAwesome\v6\CreateIcon;
use App\Actions\FontAwesome\v6\GetIconMarkup;
use App\Actions\FontAwesome\v6\GetLabelMarkup;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class IconController extends Controller
{
    public function show(Request $request)
    {
        // GET MARKER CONFIG
        $markerSize = $request->get('size', 100);
        $markerColor = $request->get('color', '#333');

        // GET ICON
        $iconMarkup = GetIconMarkup::run($request->get('icon', ''));

        // GET LABEL
        $labelMarkup = GetLabelMarkup::run(request: $request, markerSize: $markerSize);

        // COMPOSE ICON MARKER
        $mapMarkerMarkup = CreateIcon::run(
            iconMarkup: $iconMarkup,
            markerColor: $markerColor,
            markerSize: $markerSize,
            labelMarkup: $labelMarkup
        );

        return response($mapMarkerMarkup)->header('Content-Type', 'image/svg+xml');
    }
}
