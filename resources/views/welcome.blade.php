@extends('layouts.app-nav')

@section('content')
    <div class="container mx-auto px-2 text-gray-200">

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
            <div class="col-span-2 md:col-span-3">
                <div>
                    <div class="rounded-lg lg:text-center p-6 lg:py-24 bg-animated">
                        <h1 class="text-3xl lg:text-5xl font-bold">
                            Generate complex map markers on the fly.
                        </h1>
                        <p class="text-xl mt-6">
                            Simplify building complex map-based experiences for modern applications.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="rounded-lg">
                    <div class="rounded-lg text-right p-6" style="background: linear-gradient(0deg, #0f0f10, #131314);">
                        <h1 class="text-3xl lg:text-5xl font-bold">
                           250,000
                        </h1>
                        <p class="text-sm mt-2">
                            People see one of our markers every month
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="rounded-lg">
                    <div class="rounded-lg text-right p-6" style="background: linear-gradient(0deg, #0f0f10, #131314);">
                        <h1 class="text-3xl lg:text-5xl font-bold">
                            2,840,000
                        </h1>
                        <p class="text-sm mt-2">
                            Markers are used to improve maps every month
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-span-2 md:col-span-1 lg:xl-span-1 xl:col-span-1">
                <div class="rounded-lg">
                    <div class="rounded-lg text-right p-6"style="background: linear-gradient(0deg, #0f0f10, #131314);">
                        <h1 class="text-3xl lg:text-5xl font-bold">
                            <span class="text-green-500">40 ms</span>
                        </h1>
                        <p class="text-sm mt-2">
                            Average latency for markers
                        </p>
                    </div>
                </div>
            </div>

            {{-- PINS --}}
            <div class="col-span-2 md:col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
                <div class="-mb-4">
                    <img src="/api/v3/font-awesome/v6/pin?text=A&background=992DE5&size=50" class="inline h-12 m-0" />
                    <img src="/api/v3/font-awesome/v6/pin?text=AC&background=BC5AF4&size=50" class="inline h-12 m-0" />
                    <img src="/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&background=CE86F5&size=50"
                        class="inline-block h-12 m-0" />
                </div>
                <x-markdown>
                    ### Pins
                    Create pins that look native to any map but contain more contextual information for your users.
                </x-markdown>
                <a href="/documentation/font-awesome/v6/pins"
                    class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Get Started
                </a>
            </div>
            {{-- ICONS --}}
            <div class="col-span-2 md:col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg"  style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
                <div class="-mb-4">
                    <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-users&color=992DE5&size=50"
                        class="inline h-12 m-0 mx-1" />
                    <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-box&color=BC5AF4&size=50" class="inline h-12 m-0 mx-1" />
                    <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-wind&color=CE86F5&size=50"
                        class="inline-block h-12 m-0 mx-1" />
                </div>
                <x-markdown>
                    ### Icons
                    When simplicity and a minimal look are the goal. Simple icons as map markers are a good go-to.
                </x-markdown>
                <a href="/documentation/font-awesome/v6/icons"
                    class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Get Started
                </a>
            </div>
            {{-- ICON STACKS --}}
            <div class="col-span-2 md:col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg"  style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
                <div class="-mb-4">
                    <img src="/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-solid+fa-location&color=171719&on=fa-solid+fa-map&oncolor=992DE5&iconsize=14&hoffset=23&voffset=8"
                        class="inline h-12 m-0 mx-1" />
                    <img src="/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-brands+fa-amazon&color=171719&on=fa-solid+fa-truck&oncolor=BC5AF4&iconsize=30&voffset=-6&hoffset=-11"
                        class="inline h-12 m-0 mx-1" />
                    <img src="/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-brands+fa-apple&color=171719&on=fa-solid+fa-box&oncolor=CE86F5&iconsize=25&voffset=10"
                        class="inline h-12 m-0 mx-1" />
                </div>
                <x-markdown>
                    ### Icon Stacks
                    You can layer your favorite icons to create unique icons tailored to your application and branding.
                </x-markdown>
                <a href="/documentation/font-awesome/v6/icon-stacks"
                    class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Get Started
                </a>
            </div>
        </div>

        <div class="mt-12 text-xs text-white">Built with passion for better maps by <a href="https://jonasweigert.com" target="_blank" class="underline">Jonas Weigert</a></div>
    </div>
@endsection
