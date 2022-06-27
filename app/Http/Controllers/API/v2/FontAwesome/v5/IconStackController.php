<?php

namespace App\Http\Controllers\API\v2\FontAwesome\v5;

use App\Actions\CreateIconStackImage;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class IconStackController extends Controller
{
    public function show(Request $request)
    {
        $params = $request->all();
        $size = data_get($params, 'size') ?: 30;

        // calculate temp size
        // up 2x and make odd for better auto-centering
        $tempSize = round($size * 1.5);
        if ($tempSize % 2 == 0) {
            $tempSize += 1;
        }
        $params['size'] = $tempSize;

        // get normal image
        $img = CreateIconStackImage::run($params);

        // trim whitespace
        $img->trim('transparent', ['top', 'bottom', 'left', 'right'], 1);

        // resize to requested height
        $img->resize(null, $size, function ($constraint) {
            $constraint->aspectRatio();
        });

        return $img->response('png');
    }
}
