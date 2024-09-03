@extends('layouts.app-nav')

@section('seo-title')Privacy Policy - MapMarker.io @endsection

@section('content')
    <div class="container mx-auto px-2 text-gray-100">
        <div class="pt-4">
            <div class="prose prose-invert">
                <x-markdown>{{ $privacyPolicy }}</x-markdown>
            </div>
        </div>
    </div>
@endsection
