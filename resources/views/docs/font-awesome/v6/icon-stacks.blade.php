@extends('layouts.app-nav')

@section('seo-title')Icon Stacks using Font Awesome 6 - MapMarker.io @endsection
@section('seo-description')Create custom stacked icon based map markers using the appearance of Font Awesome 6. @endsection

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icon Stacks</h2>
                    <p>You can generate complex icons to convey important attributes when rendering lots of data on a map.
                        This will help improve your users understanding of what is going on when lots of things are moving.
                    </p>
                    <x-marker-creator endpoint="/api/v3/font-awesome/v6/icon-stack" :fields="[
                        'size',
                        'icon' => ['value' => 'fa-solid fa-map-pin'],
                        'iconsize' => ['value' => 35],
                        'color' => ['value' => '8F2BDB'],
                        'on' => ['value' => 'fa-solid fa-map'],
                        'oncolor' => ['value' => 'BC5AF4'],
                        'hoffset' => ['value' => 0],
                        'voffset' => ['value' => 0],
                    ]" />
                </x-docs-box>
            </div>
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icon Stacks with Text</h2>
                    <p>You can also render text on top of the icon stack to label markers (e.g. zone codes, counts, or identifiers).
                        Combine two circles to create a border effect and position text in the center.
                    </p>
                    <x-marker-creator endpoint="/api/v3/font-awesome/v6/icon-stack" :fields="[
                        'size',
                        'icon' => ['value' => 'fa-solid fa-circle'],
                        'iconsize' => ['value' => 65],
                        'color' => ['value' => '28a745'],
                        'on' => ['value' => 'fa-solid fa-circle'],
                        'oncolor' => ['value' => 'FFFFFF'],
                        'text' => ['value' => 'A1'],
                        'text_color' => ['value' => 'FFF'],
                        'textsize' => ['value' => 25],
                        'text_hoffset' => ['value' => 0],
                        'text_voffset' => ['value' => 0],
                    ]" />
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
