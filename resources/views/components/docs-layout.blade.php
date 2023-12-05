    <div class="container mx-auto px-2 text-gray-100">
        <div class="pt-4">
            <h1 class="font-bold text-5xl mb-8 md:mb-24">Documentation</h1>

            <div class="md:grid grid-cols-5 gap-8">
                <x-docs-navigation />

                {{-- DOCS CONTENT --}}
                <div class="col-span-4">
                    {{ $slot }}
                </div>
            </div>


        </div>
    </div>
