<?php

namespace App\Http\Controllers\API\v2\FontAwesome\v5;

use App\Actions\CreateIconStackImage;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class IconStackController extends Controller
{
    public function show(Request $request)
    {
        $img = CreateIconStackImage::run($request->all());
        return $img->response('png');
    }
}
