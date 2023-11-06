    <div class="container mx-auto px-2 text-gray-100">
        <div class="pt-4">
            <h1 class="font-bold text-5xl mb-24">Documentation</h1>

            <div class="md:grid grid-cols-5 gap-8">
                {{-- DOCS NAVIGATION --}}
                <div class="hidden md:block">
                    <div class="mb-6">
                        <a href="/documentation" class="block mb-1">Getting Started</a>
                        <a href="/documentation/versions" class="block mb-1">API Versions</a>
                        <a href="/changelog" class="block mb-1">Changelog</a>
                    </div>

                    <div class="mb-6">
                        <div class="text-black text-sm text-slate-300 mb-2">Font Awesome 6</div>
                        <div class="ml-2">
                            <a href="/documentation/font-awesome/v6" class="block mb-1">Overview</a>
                            <a href="/documentation/font-awesome/v6/pins" class="block mb-1">Pins</a>
                            <a href="/documentation/font-awesome/v6/icons" class="block mb-1">Icons</a>
                            <a href="/documentation/font-awesome/v6/icon-stacks" class="block mb-1">Icon Stacks</a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="text-black text-sm text-slate-300 mb-2">Font Awesome 5</div>
                        <div class="ml-2">
                            <a href="/documentation/font-awesome/v5" class="block mb-1">Overview</a>
                            <a href="/documentation/font-awesome/v5/pins" class="block mb-1">Pins</a>
                            <a href="/documentation/font-awesome/v5/icons" class="block mb-1">Icons</a>
                            <a href="/documentation/font-awesome/v5/icon-stacks" class="block">Icon Stacks</a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="text-black text-sm text-slate-300 mb-2">Font Awesome 4</div>
                        <div class="ml-2">
                            <a href="/documentation/font-awesome/v4" class="block mb-1">Overview</a>
                            <a href="/documentation/font-awesome/v4/pins" class="block mb-1">Pins</a>
                            <a href="/documentation/font-awesome/v4/icons" class="block mb-1">Icons</a>
                            <a href="/documentation/font-awesome/v4/icon-stacks" class="block">Icon Stacks</a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="text-black text-sm text-slate-300 mb-2">Integrations</div>
                        <div class="ml-2">
                            <a href="/documentation/integrations" class="block mb-1">Overview</a>
                            <a href="/documentation/integrations/bing-maps" class="block mb-1">Bing Maps</a>
                            <a href="/documentation/integrations/google-maps" class="block mb-1">Google Maps</a>
                            <a href="/documentation/integrations/mapbox" class="block">Mapbox</a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="text-black text-sm text-slate-300 mb-2">More</div>
                        <div class="ml-2">
                            <a href="/license" class="block mb-1">License</a>
                            <a href="/terms" class="block mb-1">Terms of Service</a>
                            <a href="/privacy" class="block">Privacy Policy</a>
                        </div>
                    </div>
                </div>

                {{-- DOCS CONTENT --}}
                <div class="col-span-4">
                    {{ $slot }}
                </div>
            </div>


        </div>
    </div>
