@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Pin with Text</h2>
                    <p>You can generate pins with custom text labels. This is very helpful when trying to render lots of
                        data and you are trying to tie the map markers to other content on your page such as tables or
                        lists.</p>
                    <x-marker-creator endpoint="/api/v1/font-awesome/v4/pin" :fields="['text', 'size', 'color', 'background', 'hoffset', 'voffset']" />
                </x-docs-box>
            </div>
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Pin with Icon</h2>
                    <p>You can generate pins with icons as labels. This is very helpful when you render the same object
                        quite often but in different locations as it helps the user recognize it quickly. Plus you can
                        convey meaning easily.</p>
                    <x-marker-creator endpoint="/api/v1/font-awesome/v4/pin" :fields="['icon' => ['value' => 'fa-star'], 'size', 'color', 'background', 'hoffset', 'voffset']" />
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
