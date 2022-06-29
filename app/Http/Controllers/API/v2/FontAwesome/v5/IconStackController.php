<?php

namespace App\Http\Controllers\API\v2\FontAwesome\v5;

use App\Actions\FontAwesome\v5\CreateIconStack;
use App\Actions\Image\ResizeToHeight;
use App\Actions\Image\TrimTransparentBorder;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IconStackController extends Controller
{
    const SCALE = 2.0;

    const FORCE_ODD_SIZE = true;

    public function show(Request $request)
    {
        $cacheKey = md5($request->fullurl());
        $img = Cache::remember($cacheKey, function () use ($request) {
            $size = $request->get('size') ?: 30;
            $img = CreateIconStack::run($request->all(), self::SCALE, self::FORCE_ODD_SIZE);
            TrimTransparentBorder::run($img);
            ResizeToHeight::run($img, $size);

            return $img;
        });

        return $img->response('png');
    }
}
