<?php

namespace App\Http\Controllers\API\v1\FontAwesome\v5;

use App\Actions\FontAwesome\v5\CreatePin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function show(Request $request)
    {
        $img = CreatePin::run($request->all());

        return $img->response('png');
    }
}
