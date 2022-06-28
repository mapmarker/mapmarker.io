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

    public function fontAwesome()
    {
        return redirect('/documentation/font-awesome/v5');
    }

    public function fontAwesomeV6()
    {
        return view('docs.font-awesome.v6.index');
    }

    public function fontAwesomeV5()
    {
        return view('docs.font-awesome.v5.index');
    }

    public function fontAwesomeV5Pins()
    {
        return view('docs.font-awesome.v5.pins');
    }

    public function fontAwesomeV5Icons()
    {
        return view('docs.font-awesome.v5.icons');
    }

    public function fontAwesomeV5IconStacks()
    {
        return view('docs.font-awesome.v5.icon-stacks');
    }

    public function fontAwesomeV4()
    {
        return view('docs.font-awesome.v4.index');
    }

    public function fontAwesomeV4Pins()
    {
        return view('docs.font-awesome.v4.pins');
    }

    public function fontAwesomeV4Icons()
    {
        return view('docs.font-awesome.v4.icons');
    }

    public function fontAwesomeV4IconStacks()
    {
        return view('docs.font-awesome.v4.icon-stacks');
    }
}
