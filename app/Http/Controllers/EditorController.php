<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function show(Request $request)
    {
        return redirect('/');
    }
}
