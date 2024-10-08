@extends('layouts.app-nav')

@section('seo-title')API Documentation - MapMarker.io @endsection
@section('seo-description')Get the most out of the MapMarker API for your apps and your users by integrating with the latest endpoints @endsection

@section('content')
    <x-docs-layout>

        <x-docs-box>
            <x-icon-spectrum icon="fa-solid fa-rocket" iconClass="-mr-12 w-[49px]" />

            <h2> Getting Started</h2>

            <p>
                Building more interactive maps with MapMarker.io is easy and a fairly straight forward process. To use
                our map markers in your project, you do not need to pay or register any api keys.
            </p>

            <p>
                Just make sure that whatever you are building your maps with supports creating custom map markers from
                .png image files. Most web based mapping SDKs like Google Maps or Bing Maps support this out of the box.
                Take
                a closer look at our <a href="/documentation/integrations">integrations</a> section to learn more.
            </p>
        </x-docs-box>

    </x-docs-layout>
@endsection
