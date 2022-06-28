    <div class="container mx-auto px-2 text-gray-100">
        <div class="pt-4">
            <h1 class="font-bold text-5xl mb-8">Documentation</h1>

            <div class="md:grid grid-cols-5 gap-8">
                {{-- DOCS NAVIGATION --}}
                <div>
                    <div class="mb-6">
                        <a href="/documentation" class="block">Getting Started</a>
                    </div>

                    <div class="mb-6">
                        <div class="text-black text-sm text-slate-300 mb-2">Integrations</div>
                        <a href="/documentation/integrations#bing-maps" class="block">Bing Maps</a>
                        <a href="/documentation/integrations#google-maps" class="block mb-1">Google Maps</a>
                        <a href="/documentation/integrations#mapbox" class="block">Mapbox</a>
                    </div>

                    <div class="mb-6">
                        <div class="text-black text-sm text-slate-300 mb-2">Legal</div>
                        <a href="/license" class="block mb-1">License</a>
                        <a href="/terms" class="block mb-1">Terms of Service</a>
                        <a href="/privacy" class="block">Privacy Policy</a>
                    </div>
                </div>

                {{-- DOCS CONTENT --}}
                <div class="col-span-4">
                    <div class="prose prose-invert max-w-full bg-slate-800 p-12 rounded-xl">
                        {{ $slot }}
                    </div>
                </div>
            </div>


        </div>
    </div>
