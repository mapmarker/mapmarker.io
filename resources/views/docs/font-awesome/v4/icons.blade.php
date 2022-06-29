@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icons</h2>
                    <p>You can generate pins with custom text labels. This is very helpful when trying to render lots of
                        data and you are trying to tie the map markers to other content on your page such as tables or
                        lists.</p>
                    <x-marker-creator endpoint="/api/v1/font-awesome/v4/icon" :fields="['icon' => ['value' => 'fa-star'], 'size', 'color' => ['value' => 'BC5AF4']]" />
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
