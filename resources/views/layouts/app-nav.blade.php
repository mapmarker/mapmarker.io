@extends('layouts.app')

@section('nav')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto px-4 py-0 md:pb-10">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--  Icon when menu is closed. -->
                        <svg x-show="!mobileMenuOpen" x-cloak class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="inline-block h-auto w-[41px]"
                            src="/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-solid+fa-location&color=fff&on=fa-solid+fa-map&oncolor=777&iconsize=16&hoffset=23&voffset=8"
                            alt="MapMarker.io Logo">
                        <span class="hidden md:inline-block font-bold text-xl ml-2 text-gray-50">MapMarker.io</span>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Home</a>

                            <a href="/editor"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Editor</a>

                            <a href="/documentation"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Docs</a>

                            <a href="https://status.mapmarker.io" target="_blank"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">API
                                Status</a>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 text-gray-400 font-bold">
                    <a href="https://github.com/mapmarker" target="_blank"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-black">
                        <img src="https://mapmarker.io/api/v2/font-awesome/v5/icon?icon=fa-github&size=80&color=fff" /
                            alt="Github Logo" width="30" height="30" />
                        <span class="sr-only">View Source Code</span>
                    </a>
                    <a href="/changelog"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-black">
                        {{ config('app.version') }}
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="mobileMenuOpen" x-cloak id="mobile-menu" class="sm:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 text-center">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Home</a>

                <a href="/editor"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Editor</a>

                <a href="/documentation"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Docs</a>

                <a href="https://status.mapmarker.io" target="_blank"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">API
                    Status</a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    {{-- will be filled with page content --}}
@endsection

{{-- load select 2 scripts --}}
@section('scripts')
    @parent
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

{{-- load jquery for select2 --}}
@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
