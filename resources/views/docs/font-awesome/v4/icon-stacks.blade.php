@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icon Stacks</h2>
                    <p>You can generate pins with custom text labels. This is very helpful when trying to render lots of
                        data and you are trying to tie the map markers to other content on your page such as tables or
                        lists.</p>
                    <x-marker-creator endpoint="/api/v1/font-awesome/v4/icon-stack" :fields="[
                        'size',
                        'icon' => ['value' => 'fa-map-pin'],
                        'iconsize' => ['value' => 20],
                        'color' => ['value' => '8F2BDB'],
                        'on' => ['value' => 'fa-map'],
                        'oncolor' => ['value' => 'BC5AF4'],
                        'hoffset' => ['value' => 0],
                        'voffset' => ['value' => 0],
                    ]" />
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
