<?php

namespace App\Http\Controllers\API\v2\FontAwesome\v5;

use App\Actions\FontAwesome\v5\CreatePin;
use App\Actions\Image\ResizeToHeight;
use App\Actions\Image\TrimTransparentBorder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinController extends Controller
{
    const SCALE = 2.0;

    const FORCE_ODD_SIZE = true;

    public function show(Request $request)
    {
        $size = $request->get('size') ?: 30;
        $img = CreatePin::run($request->all(), self::SCALE, self::FORCE_ODD_SIZE);
        TrimTransparentBorder::run($img);
        ResizeToHeight::run($img, $size);

        return $img->response('png');
    }
}
