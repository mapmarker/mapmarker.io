<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function license()
    {
        $license = file_get_contents(base_path('LICENSE'));

        return view('license', compact('license'));
    }

    public function privacy()
    {
        $privacyPolicy = file_get_contents(base_path('PRIVACY.md'));

        return view('privacy', compact('privacyPolicy'));
    }

    public function terms()
    {
        $termsOfService = file_get_contents(base_path('TERMS.md'));

        return view('terms', compact('termsOfService'));
    }
}
