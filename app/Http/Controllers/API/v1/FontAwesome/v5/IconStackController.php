<?php

namespace App\Http\Controllers\API\v1\FontAwesome\v5;

use App\Http\Controllers\API\v1\FaStackController as Controller;
use App\Helpers\Encoders\FontAwesome\v5\FontAwesomeV5Encoder;

class IconStackController extends Controller
{
    protected function getDefaultOnIcon()
    {
        return 'fa-circle-regular';
    }

    protected function getIconFontPath($icon)
    {
        return FontAwesomeV5Encoder::getFile($icon);
    }

    protected function getTextFontPath()
    {
        return base_path('resources/fonts/monofonto.ttf');
    }

    protected function getUnicodeCharFromIcon($icon)
    {
        return FontAwesomeV5Encoder::getUnicodeFromIcon($icon);
    }
}
