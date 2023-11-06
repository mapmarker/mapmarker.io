@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="md:grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <x-icon-spectrum icon="fa-brands fa-fort-awesome" iconClass="-mr-12 w-[49px]" />

                    <h2>Font Awesome 5</h2>

                    <p>
                        Font Awesome is the Internet's icon library and toolkit, used by millions of designers, developers,
                        and
                        content creators. So its very likely that you would want to use those icons for your map-based
                        applications
                        as well.
                    </p>
                </x-docs-box>
            </div>
            {{-- PINS --}}
            <div class="prose prose-invert text-center pt-10">
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
            <div class="prose prose-invert text-center pt-10">
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
            <div class="prose prose-invert text-center pt-10">
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
    </x-docs-layout>
@endsection
