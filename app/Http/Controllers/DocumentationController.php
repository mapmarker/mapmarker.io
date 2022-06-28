<?php

namespace App\Http\Controllers;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('docs.index');
    }

    public function versions()
    {
        return view('docs.versions');
    }

    public function integrations()
    {
        return view('docs.integrations.index');
    }

    public function integrationsBingMaps()
    {
        return view('docs.integrations.bing-maps');
    }

    public function integrationGoogleMaps()
    {
        return view('docs.integrations.google-maps');
    }

    public function integrationsMapbox()
    {
        return view('docs.integrations.mapbox');
    }
}
