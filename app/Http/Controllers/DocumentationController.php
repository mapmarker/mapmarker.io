<?php

namespace App\Http\Controllers;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('docs.index');
    }

    public function integrations()
    {
        return view('docs.integrations.index');
    }
}
