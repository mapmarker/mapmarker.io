@extends('layouts.app-nav')

@section('content')
    <div class="container mx-auto px-2 text-gray-100">
        <div class="pt-4">
            <h1 class="font-bold text-5xl mb-8">Changelog</h1>
            <p class="max-w-3xl">Here is the list of latest changes to the MapMarker.io platform. These notes are compiled
                automatically with every release so these will be up-to-date with the latest changes available. You can find
                the source file in our Github repo.</p>
            <div class="changelog changelog-slim mt-12 pb-24">
                <x-markdown>{{ $changelogContent }}</x-markdown>
            </div>
        </div>
    </div>
@endsection
