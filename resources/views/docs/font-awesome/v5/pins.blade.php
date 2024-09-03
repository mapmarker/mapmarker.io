@extends('layouts.app-nav')

@section('seo-title')Pins using Font Awesome 6 - MapMarker.io @endsection
@section('seo-description')Create custom pin based map markers with custom text using the appearance of Font Awesome 6. @endsection

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Pin with Text</h2>
                    <p>You can generate pins with custom text labels. This is very helpful when trying to render lots of
                        data and you are trying to tie the map markers to other content on your page such as tables or
                        lists.</p>
                    <x-marker-creator endpoint="/api/v2/font-awesome/v5/pin" :fields="['text', 'size', 'color', 'background', 'hoffset', 'voffset']" />
                </x-docs-box>
            </div>
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Pin with Icon</h2>
                    <p>You can generate pins with icons as labels. This is very helpful when you render the same object
                        quite often but in different locations as it helps the user recognize it quickly. Plus you can
                        convey meaning easily.</p>
                    <x-marker-creator endpoint="/api/v2/font-awesome/v5/pin" :fields="[
                        'icon' => ['value' => 'fa-star-solid'],
                        'size',
                        'color',
                        'background',
                        'hoffset',
                        'voffset',
                    ]" />
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
