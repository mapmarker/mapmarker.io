@extends('layouts.app-nav')

@section('content')
    <div class="container mx-auto px-2 text-gray-200">

        <div class="md:grid grid-cols-2 gap-8">
            <div class="col-span-2">
                <div class="rounded-lg mb-8 md:mb-0 hero">
                    <div class="rounded-lg lg:text-center bg-indigo-700/80 p-6 lg:py-36">
                        <h1 class="text-3xl lg:text-5xl font-bold">
                            Generate complex map markers on the fly.
                        </h1>
                        <p class="text-xl mt-6">
                            Simplify building complex map-based experiences for modern applications.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-slate-800 p-8 rounded-lg mb-8 md:mb-0">
                    <div class="changelog changelog-slim">
                        <x-markdown>{{ $versionEntry }}</x-markdown>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
