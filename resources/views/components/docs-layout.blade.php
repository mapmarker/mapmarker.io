    <div class="container mx-auto px-2 text-gray-100">
        <div class="pt-4">
            <h1 class="font-bold text-5xl mb-8">Documentation</h1>

            <div class="md:grid grid-cols-5 gap-8">
                {{-- DOCS NAVIGATION --}}
                <div>
                    <a href="/documentation" class="block">Getting Started</a>
                    <a href="/license" class="block">License</a>
                    <a href="/terms" class="block">Terms of Service</a>
                    <a href="/privacy" class="block">Privacy Policy</a>
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
