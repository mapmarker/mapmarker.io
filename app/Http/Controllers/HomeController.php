<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $versionEntry = $this->getLatestVersionEntryFromChangelog();
        return view('welcome', compact('versionEntry'));
    }

    protected function getLatestVersionEntryFromChangelog()
    {
        $changelogContent = file_get_contents(base_path('CHANGELOG.md'));
        $pieces = explode("# [", $changelogContent);
        return trim("# [Release " . $pieces[1]);
    }
}
