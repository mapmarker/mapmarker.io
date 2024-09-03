@extends('layouts.app-nav')

@section('seo-title')Custom Markers in Map SDKs - MapMarker.io @endsection
@section('seo-description')Here is everything you need to know about how to use our custom map markers within popular mapping software development kits. @endsection

@section('content')
    <x-docs-layout>
        <div class="md:grid grid-cols-3 gap-8">
            <div class="col-span-3 mb-8 md:mb-0">
                <x-docs-box>
                    <x-icon-spectrum icon="fa-solid fa-gear" iconClass="-mr-12 w-[49px]" />

                    <h2>Integrations</h2>

                    <p>
                        This section is intended to help get you started using our API by providing some basic examples for
                        popular mapping tools.
                    </p>
                </x-docs-box>
            </div>

            <div class="text-center mb-8">
                <x-docs-box>
                    <img src="/api/v2/font-awesome/v5/icon-stack?icon=fa-microsoft&size=100&iconsize=50&color=594578&on=fa-square-solid&oncolor=DDD"
                        class="mx-auto h-[75px]">
                    <h3>Bing Maps</h3>
                    <a href="/documentation/integrations/bing-maps"
                        class="no-underline -mb-4 mt-4 block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Read Integration Guide
                    </a>
                </x-docs-box>
            </div>
            <div class="text-center mb-8">
                <x-docs-box>
                    <img src="/api/v2/font-awesome/v5/icon-stack?icon=fa-google&size=100&iconsize=50&color=594578&on=fa-square-solid&oncolor=DDD"
                        class="mx-auto h-[75px]">
                    <h3>Google Maps</h3>
                    <a href="/documentation/integrations/google-maps"
                        class="no-underline -mb-4 mt-4 block  px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Read Integration Guide
                    </a>
                </x-docs-box>
            </div>
            <div class="text-center mb-8">
                <x-docs-box>
                    <img src="/api/v2/font-awesome/v5/icon-stack?icon=fa-map-marker-alt&size=100&iconsize=50&color=594578&on=fa-square-solid&oncolor=DDD"
                        class="mx-auto h-[75px]">
                    <h3>Mapbox</h3>
                    <a href="/documentation/integrations/mapbox"
                        class="no-underline -mb-4 mt-4 block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Read Integration Guide
                    </a>
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
