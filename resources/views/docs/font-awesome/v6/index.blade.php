@extends('layouts.app-nav')

@section('content')
<x-docs-layout>

    <div class="md:grid grid-cols-3 gap-8">
        <div class="col-span-3">
            <x-docs-box>
                <div class="mb-4">
                    <img src="/api/v3/font-awesome/v6/icon?icon=fa-brands+fa-fort-awesome&size=50&color=6013CC" class="m-0 inline h-12 -mr-12 w-[49px]" />
                    <img src="/api/v3/font-awesome/v6/icon?icon=fa-brands+fa-fort-awesome&&size=50&color=992DE5" class="m-0 inline h-12 -mr-12 w-[49px]" />
                    <img src="/api/v3/font-awesome/v6/icon?icon=fa-brands+fa-fort-awesome&&size=50&color=BC5AF4" class="m-0 inline h-12 -mr-12 w-[49px]" />
                    <img src="/api/v3/font-awesome/v6/icon?icon=fa-brands+fa-fort-awesome&&size=50&color=CE86F5" class="m-0 inline h-12 -mr-12 w-[49px]" />
                </div>


                <h2>Font Awesome 6</h2>

                <p>
                    Font Awesome is the Internet's icon library and toolkit, used by millions of designers, developers, and content creators. So its very likely that you would want to use those icons for your map-based applications as well.
                    With this generation of Font-Awesome we are introducing SVG map markers to make your applications faster and look better!
                </p>
            </x-docs-box>
        </div>

        {{-- BETA WARNING --}}
        <div class="col-span-3">
            <x-docs-box class="bg-yellow-600 text-gray-900">
                <div class="font-black text-lg mb-4">Under Development</div>
                <div>
                    Our latest implementation of Font Awesome v6 introduces a new generation of our API to bring SVG map markers to your applications for a faster, sleeker look. Please note that this feature is currently in public BETA. Expect ongoing development and potential breaking changes. Use with care!
                </div>
            </x-docs-box>
        </div>

        {{-- PINS --}}
        <div class="prose prose-invert text-center pt-10">
            <div class="mb-4">
                <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-users&color=992DE5&size=50" class="inline h-12 m-0 mx-1" />
                <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-box&color=BC5AF4&size=50" class="inline h-12 m-0 mx-1" />
                <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-wind&color=CE86F5&size=50" class="inline-block h-12 m-0 mx-1" />
            </div>
            <div class="prose">
                <h3 class="text-white">Pins</h3>
                <p class="text-white text-sm">Create pins that look native to any map but contain more contextual information for your users.</p>
            </div>
            <a href="/documentation/font-awesome/v6/pins" class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Get Started
            </a>
        </div>

        {{-- ICONS --}}
        <div class="prose prose-invert text-center pt-10">
            <div class="mb-4">
                <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-users&color=992DE5&size=50" class="inline h-12 m-0 mx-1" />
                <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-box&color=BC5AF4&size=50" class="inline h-12 m-0 mx-1" />
                <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-wind&color=CE86F5&size=50" class="inline-block h-12 m-0 mx-1" />
            </div>
            <div class="prose">
                <h3 class="text-white">Icons</h3>
                <p class="text-white text-sm">Create pins that look native to any map but contain more contextual information for your users.</p>
            </div>
            <a href="/documentation/font-awesome/v6/icons" class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Get Started
            </a>
        </div>

        {{-- ICON STACKS --}}
        {{-- PINS --}}
        <div class="prose prose-invert text-center pt-10">
            <div class="mb-4">
                <img src="/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-solid+fa-map-pin&color=171719&on=fa-solid+fa-map&oncolor=992DE5&iconsize=20&hoffset=23&voffset=7" class="inline h-12 m-0 mx-1" />
                <img src="/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-brands+fa-amazon&color=171719&on=fa-solid+fa-truck&oncolor=BC5AF4&iconsize=30&voffset=-6&hoffset=-11" class="inline h-12 m-0 mx-1" />
                <img src="/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-brands+fa-apple&color=171719&on=fa-solid+fa-box&oncolor=CE86F5&iconsize=25&voffset=10" class="inline h-12 m-0 mx-1" />
            </div>
            <div class="prose">
                <h3 class="text-white">Icon Stacks</h3>
                <p class="text-white text-sm">You can layer your favorite icons to create unique icons tailored to your application and branding.</p>
            </div>
            <a href="/documentation/font-awesome/v6/icon-stacks" class="no-underline -mb-4 mt-4 inline-block px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Get Started
            </a>
        </div>

    </div>

</x-docs-layout>
@endsection
