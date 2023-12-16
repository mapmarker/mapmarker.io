@extends('layouts.app-nav')

@section('content')
    <div class="container mx-auto px-2 text-gray-200">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="col-span-1 md:col-span-3">
                <div>
                    <div class="rounded-lg text-center bg-animated overflow-hidden">
                        <div class="py-6 lg:pt-24 lg:pb-12 px-6 lg:px-24">
                            <h1 class="text-3xl lg:text-5xl font-bold">
                                Custom map markers for your app
                            </h1>
                            <p class="text-xl mt-6">
                                Simplify map-based experiences with better icons.
                            </p>
                        </div>

                        {{-- MAP --}}
                        <div class="perspective-800 h-[300px] overflow-hidden relative">
                            <img src="{{ asset('/images/map.png') }}" class="w-full transform rotate-x-45 drop-shadow-xl mx-auto opacity-20 absolute left-0 -top-[20vw]">

                            <img src="/api/v3/font-awesome/v6/pin?text=A1&background=CE86F5&size=50" class="absolute left-1/4 top-2/3" alt="Stop #1 Icon" />
                            <img src="/api/v3/font-awesome/v6/pin?text=A2&background=CE86F5&size=50" class="absolute left-3/4 top-1/3"  alt="Stop #2 Icon" />
                            <img src="/api/v3/font-awesome/v6/pin?text=A3&background=CE86F5&size=50" class="absolute left-1/2 top-[30px]" alt="Stop #3 Icon" />
                            <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-truck&color=FFF&size=50" class="absolute left-1/3 top-1/3" alt="Truck #1 Icon" />
                            <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-box&color=FFF&size=50&label=!" class="absolute left-[60%] top-2/3" alt="Truck #1 Icon" />
                            <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-house&color=FFF&size=50" class="absolute left-[15%] top-1/4" alt="Home" />
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="rounded-lg">
                    <div class="rounded-lg text-right p-6" style="background: linear-gradient(0deg, #0f0f10, #131314);">
                        <h1 class="text-3xl lg:text-5xl font-bold">
                           200,000
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
                            2,000,000
                        </h1>
                        <p class="text-sm mt-2">
                            Markers are used to improve maps every month
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-span-1 lg:xl-span-1 xl:col-span-1">
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

            <div class="md:col-span-3 py-12">
                <div class="font-black text-3xl uppercase">
                    Developers trust MapMarker.io
                </div>
                <div class="">
                    We believe trust is earned. All changes are driven by a commitment to end-user performance, reliability, and long-term support (LTS).
                </div>
            </div>

            {{-- COMPANIES --}}
            <div class="col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
                <div class="text-2xl font-black mb-4">Petronas</div>
                <div>
                    <span class="bg-gray-500 text-white text-xs px-2 py-1 rounded-full uppercase">Logistics</span>
                </div>
                <p>
                    Petronas is a global energy group with presence in over 100 countries. They produce and deliver energy and solutions that power society’s progress.
                </p>
                <p>
                    Petronas leverages MapMarker.io in the ride-hailing app for employees in one of the largest integrated petrochemical facilities in Malaysia.
                </p>
            </div>

            <div class="col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
                <div class="text-2xl font-black mb-4">Anheuser-Bush</div>
                <div>
                    <span class="bg-gray-500 text-white text-xs px-2 py-1 rounded-full uppercase">Retail</span>
                </div>
                <p>
                    When Anheuser-Busch was founded in the 1850s, it started as a small neighborhood brewery. Today, they employ thousands of people across the USA.
                </p>
                <p>
                    Anheuser-Bush uses MapMarker.io to power the store locator tools on their websites to make it easier for customers to find their products in stores nearby.
                </p>
            </div>

            <div class="col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
                <div class="text-2xl font-black mb-4">Tafel.de</div>
                <div>
                    <span class="bg-gray-500 text-white text-xs px-2 py-1 rounded-full uppercase">Logistics</span>
                </div>
                <p>
                    The Tafel supports 1.6 to 2 million people in need of food throughout the country of Germany – nearly one third of them are children and youth.
                </p>
                <p>
                    The Tafel leverages MapMarker.io as part of their digitization efforts to simplify the coordination across teams running food collection amd distibution routes.
                </p>
            </div>

            <div class="md:col-span-3 py-12">
                <div class="font-black text-3xl uppercase">
                    Get Started
                </div>
                <div class="">
                    Start building better maps in minutes.
                </div>
            </div>


            {{-- PINS --}}
            <div class="col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
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
            <div class="col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg"  style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
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
            <div class="col-span-1 lg:xl-span-1 xl:col-span-1 prose prose-invert text-left p-10 rounded-lg"  style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
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
