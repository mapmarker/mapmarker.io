<?php

namespace App\Http\Controllers\API\v3\FontAwesome\v6;

use App\Actions\FontAwesome\v6\GetIconMarkup;
use App\Actions\FontAwesome\v6\GetLabelMarkup;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class IconStackController extends Controller
{
    public function show(Request $request)
    {
        // GET MARKER CONFIG
        $markerSize = $request->get('size') ?: 100;

        // FOREGROUND ICON
        $foregroundIcon = $request->get('icon') ?: null;
        $foregroundIconColor = '#'.$request->get('color') ?: '000';
        $foregroundIconMarkup = GetIconMarkup::run($foregroundIcon);

        // FOREGROUND ICON SHIFTING
        $foregroundXShiftPercent = $request->get('hoffset', 0) / $markerSize * 100.00;
        $foregroundYShiftPercent = $request->get('voffset', 0) / $markerSize * 100.00;

        // FOREGROUND SIZING
        $foregroundIconSize = $request->get('iconsize', $markerSize / 3);
        $foregroundIconHeightPercent = $foregroundIconSize / $markerSize * 100.00;
        $foregroundIconYOffset = 50 - ($foregroundIconHeightPercent / 2.00) + $foregroundYShiftPercent;
        $foregroundIconXOffset = 0 + $foregroundXShiftPercent;

        // BACKGROUND ICON
        $backgroundIcon = $request->get('on') ?: 'fa-solid fa-circle';
        $backgroundIconColor = '#'.$request->get('oncolor', 'CCC');
        $backgroundIconMarkup = GetIconMarkup::run($backgroundIcon);

        // TEXT
        $text = htmlspecialchars((string) $request->get('text', ''), ENT_QUOTES | ENT_XML1, 'UTF-8');
        $textColor = '#'.$request->get('text_color', 'FFF');
        $textSize = $request->get('textsize', $markerSize / 3);
        $textFont = 'Arial';
        $textXOffsetPercent = 50 + ($request->get('text_hoffset', 0) / $markerSize * 100.00);
        $textYOffsetPercent = 50 + ($request->get('text_voffset', 0) / $markerSize * 100.00);
        $textMarkup = '';
        if ($request->has('text')) {
            $textMarkup = <<<EOD
            <text x="{$textXOffsetPercent}%" y="{$textYOffsetPercent}%" fill="{$textColor}" text-anchor="middle" dy=".33em" font-size="{$textSize}" font-family="{$textFont}">{$text}</text>
            EOD;
        }

        // LABEL
        $labelMarkup = GetLabelMarkup::run(request: $request, markerSize: $markerSize);

        $mapMarkerMarkup = <<<EOD
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" width="{$markerSize}" height="{$markerSize}">
            <!--! Generated with MapMarker.io - https://mapmarker.io License - https://www.mapmarker.io/license -->
            <svg fill="{$backgroundIconColor}">
                {$backgroundIconMarkup}
            </svg>
            <svg fill="{$foregroundIconColor}" height="{$foregroundIconHeightPercent}%" x="{$foregroundIconXOffset}%" y="{$foregroundIconYOffset}%">
                {$foregroundIconMarkup}
            </svg>

            {$textMarkup}

            {$labelMarkup}
        </svg>
        EOD;

        return response($mapMarkerMarkup)->header('Content-Type', 'image/svg+xml');
    }
}
