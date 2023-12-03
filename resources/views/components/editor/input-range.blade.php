<div>
    <label class="block font-bold mb-1">Size</label>

    <div class="grid grid-cols-2 gap-8"
        x-data="{
            value: {{ $defaultValue }},
            init() {
                this.$watch('value', value => {
                    this.$dispatch('{{ $changeEvent }}', this.value);
                });
            }
        }">

        {{-- INPUT --}}
        <input class="border border-transparent shadow px-4 py-2 leading-normal text-gray-700 bg-white rounded-md focus:outline-none focus:shadow-outline" type="number" min="{{ $min }}" max="{{ $max }}" step="{{ $step }}" x-model="value" />

        {{-- SLIDER --}}
        <div class="pt-3">
            <input class="w-full" type="range" x-model="value" min="{{ $min }}" max="{{ $max }}" step="{{ $step }}" />
        </div>
    </div>
</div>
