<?php

namespace App\Http\Controllers;

class ChangelogController extends Controller
{
    public function index()
    {
        $changelogContent = file_get_contents(base_path('CHANGELOG.md'));

        return view('changelog', compact('changelogContent'));
    }
}
