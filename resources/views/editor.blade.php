@extends('layouts.app-nav')

@section('content')
    <div class="container mx-auto px-2 text-gray-200">
        <h1 class="font-bold text-5xl mb-8">
            Editor
            <span class="hidden md:inline-block">
                <span class="text-slate-800">//</span> Creator <span class="text-slate-800">//</span> Playground
            </span>
        </h1>
        <div class="mb-12 max-w-xl">
            Say goodbye to generic icons and hello to a world of personalized
            cartography. Design and define map markers with ease, using a
            myriad of customization options to match your app's unique identity.
        </div>

        <x-editor />
    </div>
@endsection
