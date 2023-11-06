@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icon Stacks</h2>
                    <p>You can generate complex icons to convey importan attributes when rendering lots of data on a map.
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
        </div>
    </x-docs-layout>
@endsection
