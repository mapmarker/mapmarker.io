<div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12"
    @icon-changed.window="iconName = $event.detail"
    @color-changed.window="color = $event.detail.replace('#', '')"
    @size-changed.window="size = $event.detail"
    x-data="Editor()">

        <div class="md:col-span-2 text-left p-10 rounded-lg" style="background: linear-gradient(145deg, #0f0f10, #171719, #171719, #171719);">

            {{-- EDITOR ICON STYLE SELECTOR --}}
            {{-- <div class="mb-8">
                <h2 class="font-bold text-xl mb-4">Pick what you want to create:</h2>
                <x-editor.experience-selector />
            </div> --}}

            {{-- CREATOR EXPERIENCES --}}
            <div class="mb-9">
                {{-- PIN WITH TEXT --}}
                <div>

                    {{-- ICON --}}
                    <x-editor.input-icon-select change-event="icon-changed" />

                    <div class="md:grid grid-cols-3 gap-8">
                        <div class="col-span-1">
                            <x-editor.input-color-select change-event="color-changed" default="#333" />
                        </div>
                        <div class="col-span-2">
                            <x-editor.input-range change-event="size-changed" default="50" />
                        </div>
                    </div>
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
                <img x-cloak :src="iconUrl()" alt="Preview" class="block mx-auto" />
            </div>
        </div>
    </div>
</div>

<script>
    function Editor() {
       return {
            size: 50,
            iconName: 'fa-solid fa-map-location',
            color: '333',
            experience: 'icon',

            iconUrl() {
                return '/api/v3/font-awesome/v6/icon?size='+this.size+'&icon='+this.iconName+'&color='+this.color;
            }
        }
    }
</script>
