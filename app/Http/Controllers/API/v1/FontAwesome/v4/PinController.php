<?php

namespace App\Http\Controllers\API\v1\FontAwesome\v4;

use App\Http\Controllers\API\v1\PinController as BaseController;
use App\Helpers\Encoders\FontAwesome\v4\FontAwesomeV4Encoder;

class PinController extends BaseController
{
    protected function getIconFontPath($icon)
    {
        return FontAwesomeV4Encoder::getFile($icon);
    }

    protected function getTextFontPath()
    {
        return base_path('resources/fonts/monofonto.ttf');
    }

    protected function getUnicodeCharFromIcon($icon)
    {
        return FontAwesomeV4Encoder::getUnicodeFromIcon($icon);
    }
}
