<div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12"
    id="editor"
    @icon-changed.window="console.log($event.detail)"
    x-data="{
        iconName: undefined,
        experience: 'pin-with-text',
    }">

        <div class="md:col-span-2 text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">

            {{-- EDITOR ICON STYLE SELECTOR --}}
            <div class="mb-8">
                <h2 class="font-bold text-xl mb-4">Pick what you want to create:</h2>

                {{-- EXPERIENCE SELECTOR MOBILE --}}
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                    <select id="tabs" name="tabs" class="block w-full text-gray-200 bg-gray-700 hover:bg-gray-800 rounded-md border-gray-900 focus:border-indigo-500 focus:ring-indigo-500">
                        <option selected value="pin-with-text">Pin with Text</option>
                        <option selected value="pin-with-icon">Pin with Icon</option>
                        <option selected value="icon">Icon</option>
                        <option selected value="icon-stack">Icon Stack</option>
                    </select>
                </div>

                {{-- EXPERIENCE SELECTOR DESKTOP --}}
                <div class="hidden sm:block">
                    <nav class="isolate flex divide-x divide-gray-900 rounded-lg shadow" aria-label="Tabs">
                        <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                        <a href="#" class="text-center text-gray-200 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-gray-800 py-4 px-4 text-center text-sm font-medium hover:bg-gray-800 focus:z-10" aria-current="page">
                            <img src="/api/v3/font-awesome/v6/pin?text=AC&background=BC5AF4&size=40" class="mx-auto mb-2">
                            <span>Pin with Text</span>
                            <span aria-hidden="true" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>
                        <a href="#" class="text-center text-gray-200 group relative min-w-0 flex-1 overflow-hidden bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-800 focus:z-10" aria-current="page">
                            <img src="/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&background=BC5AF4&size=40" class="mx-auto mb-2">
                            <span>Pin with Icon</span>
                            <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>
                        <a href="#" class="text-center text-gray-200 group relative min-w-0 flex-1 overflow-hidden bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-800 focus:z-10" aria-current="page">
                            <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-box&color=BC5AF4&size=40" class="mx-auto mb-2">
                            <span>Icon</span>
                            <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>
                        <a href="#" class="text-center text-gray-200 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-800 focus:z-10" aria-current="page">
                            <img src="/api/v3/font-awesome/v6/icon-stack?size=40&icon=fa-solid+fa-dollar-sign&color=FFF&on=fa-solid+fa-truck&oncolor=BC5AF4&iconsize=15&voffset=-4&hoffset=-7" class="mx-auto mb-2">
                            <span>Icon Stack</span>
                            <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>
                    </nav>
                </div>
            </div>

            {{-- CREATOR EXPERIENCES --}}
            <div class="mb-9">
                {{-- PIN WITH TEXT --}}
                <div>
                    <h2 class="font-bold text-xl mb-4" x-on:click="console.log($refs)">
                        Customize your marker:
                    </h2>

                    <div x-ref="test">lorem</div>
                    <x-editor-icon-select change-event="icon-changed" />
                </div>

                {{-- PIN WITH ICON --}}
                <div>
                    {{-- @todo: implement this --}}
                </div>

                {{-- ICON --}}
                <div>
                    {{-- @todo: implement this --}}
                </div>

                {{-- ICON STACK --}}
                <div>
                    {{-- @todo: implement this --}}
                </div>
            </div>

        </div>
        <div class="col-span-1 text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">
            <h2 class="font-bold text-xl mb-4">Preview</h2>

            <div class="bg-gray-200 p-12 rounded-lg">
                <img src="http://localhost/api/v3/font-awesome/v6/icon-stack?size=64&icon=fa-solid+fa-location&color=fff&on=fa-solid+fa-map&oncolor=777&iconsize=16&hoffset=23&voffset=8" height="50px" width="50px" alt="Preview" class="block mx-auto" />
            </div>

        </div>
    </div>
</div>
