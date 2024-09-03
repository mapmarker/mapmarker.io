@extends('layouts.app-nav')

@section('seo-title')License - MapMarker.io @endsection
@section('seo-description')We are open-source and use the MIT license for the convenvience of businesses and developers everywhere. @endsection

@section('content')
    <div class="container mx-auto px-2 text-gray-100">
        <div class="pt-4">
            <h1 class="font-bold text-5xl mb-8">License</h1>
            <div class="prose prose-invert">
                <x-markdown>{{ $license }}</x-markdown>
            </div>
        </div>
    </div>
@endsection
