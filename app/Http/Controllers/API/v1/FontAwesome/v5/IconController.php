<?php

namespace App\Http\Controllers\API\v1\FontAwesome\v5;

use App\Actions\FontAwesome\v5\CreateIcon;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class IconController extends Controller
{
    const SCALE = 1.0;

    const FORCE_ODD_SIZE = false;

    public function show(Request $request)
    {
        $img = CreateIcon::run($request->all(), self::SCALE, self::FORCE_ODD_SIZE);

        return $img->response('png');
    }
}
