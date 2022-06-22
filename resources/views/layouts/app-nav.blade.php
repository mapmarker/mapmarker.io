@extends('layouts.app')

@section('nav')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="bg-zinc-900 fixed top-0 left-0 right-0">
        <div class="container mx-auto px-4">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--  Icon when menu is closed. -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="block h-8 w-auto"
                            src="/api/v1/font-awesome/v5/icon-stack?size=200&icon=fa-map-marker-alt&color=626BE9&on=fa-map-solid&oncolor=44444&iconsize=48&hoffset=66&voffset=20"
                            alt="MapMarker.io Logo">
                        <span class="hidden md:inline-block font-bold text-xl ml-2">MapMarker.io</span>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Dashboard</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 text-gray-400 font-bold">
                    {{ config('app.version') }}
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">Dashboard</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
@endsection
