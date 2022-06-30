@extends('layouts.app-nav')

@section('content')
    <div class="container mx-auto px-2 text-gray-200">

        <div class="md:grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <div class="rounded-lg mb-8 md:mb-0">
                    <div class="rounded-lg lg:text-center bg-slate-700/80 p-6 lg:py-24">
                        <h1 class="text-3xl lg:text-5xl font-bold">
                            Generate complex map markers on the fly.
                        </h1>
                        <p class="text-xl mt-6">
                            Simplify building complex map-based experiences for modern applications.
                        </p>
                    </div>
                </div>
            </div>
            {{-- PINS --}}
            <div class="prose prose-invert text-center pt-10 pb-4">
                <div class="-mb-4">
                    <img src="/api/v2/font-awesome/v5/pin?text=A&background=992DE5&size=50" class="inline h-12 m-0 mx-1" />
                    <img src="/api/v2/font-awesome/v5/pin?text=AC&background=BC5AF4&size=50" class="inline h-12 m-0 mx-1" />
                    <img src="/api/v2/font-awesome/v5/pin?icon=fa-star-solid&background=CE86F5&size=50"
                        class="inline-block h-12 m-0 mx-1" />
                </div>
                <x-markdown>
                    ### Pins
                    Create pins that look native to any map but contain more contextual information for your users.
                </x-markdown>
                <a href="/documentation/font-awesome/v5/pins"
                    class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Get Started
                </a>
            </div>
            {{-- ICONS --}}
            <div class="prose prose-invert text-center pt-10 pb-4">
                <div class="-mb-4">
                    <img src="/api/v2/font-awesome/v5/icon?icon=fa-users&color=992DE5&size=50"
                        class="inline h-12 m-0 mx-1" />
                    <img src="/api/v2/font-awesome/v5/icon?icon=fa-box&color=BC5AF4&size=50" class="inline h-12 m-0 mx-1" />
                    <img src="/api/v2/font-awesome/v5/icon?icon=fa-wind&color=CE86F5&size=50"
                        class="inline-block h-12 m-0 mx-1" />
                </div>
                <x-markdown>
                    ### Icons
                    When simplicity and a minimal look are the goal. Simple icons as map markers are a good go-to.
                </x-markdown>
                <a href="/documentation/font-awesome/v5/icons"
                    class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Get Started
                </a>
            </div>
            {{-- ICON STACKS --}}
            <div class="prose prose-invert text-center pt-10 pb-4">
                <div class="-mb-4">
                    <img src="/api/v2/font-awesome/v5/icon-stack?size=64&icon=fa-map-marker-alt&color=171719&on=fa-map-solid&oncolor=992DE5&iconsize=14&hoffset=21&voffset=8"
                        class="inline h-12 m-0 mx-1" />
                    <img src="/api/v2/font-awesome/v5/icon-stack?size=64&icon=fa-amazon&color=171719&on=fa-truck&oncolor=BC5AF4&iconsize=30&voffset=-6&hoffset=-11"
                        class="inline h-12 m-0 mx-1" />
                    <img src="/api/v2/font-awesome/v5/icon-stack?size=64&icon=fa-apple&color=171719&on=fa-box&oncolor=CE86F5&iconsize=25&voffset=10"
                        class="inline h-12 m-0 mx-1" />
                </div>
                <x-markdown>
                    ### Icon Stacks
                    You can layer your favorite icons to create unique icons tailored to your application and branding.
                </x-markdown>
                <a href="/documentation/font-awesome/v5/icon-stacks"
                    class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Get Started
                </a>
            </div>
        </div>
    </div>
@endsection
