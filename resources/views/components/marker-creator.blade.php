<div x-data="{
    marker: '',
    endpoint: '{{ $endpoint }}',
    parameters: {{ json_encode($parameters) }},
    updateMarkerUrl() {
        this.marker = this.endpoint + '?' +
            Object.keys(this.parameters)
            .map(key => {
                return `${key}=${encodeURIComponent(this.parameters[key]['value'])}`;
            })
            .join('&');
    }
}" x-init="$nextTick(() => { updateMarkerUrl() })">
    <div class="md:grid grid-cols-10">
        <div class="col-span-1">
            <img x-bind:src="marker" class="mx-auto md:mx-0" />
        </div>
        <div class="col-span-9">
            <div class="mt-9 p-2 bg-slate-300 text-slate-900 font-mono rounded"
                x-text="'{{ config('app.url') }}' + marker">
            </div>
        </div>
        <div class="col-span-10">
            <table>
                <thead>
                    <tr>
                        <th class="w-1 text-lg pr-4">Parameter</th>
                        <th class="w-1 text-lg">Example</th>
                        <th class='text-lg'>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="(parameter,key) in parameters">
                        <tr>
                            <td x-text="key" class="font-mono font-black pr-4"></td>
                            <td>
                                <input x-model="parameter.value" :type="parameter.type"
                                    @input.debounce.1000ms="updateMarkerUrl"
                                    class="font-mono w-36 -mb-2 pb-2 pl-0 focus:outline-none focus:ring-0 block w-full bg-transparent border-0 text-gray-500">
                            </td>
                            <td>
                                <span x-text="parameter.description"></span>
                            </td>
                    </template>
                </tbody>
            </table>




        </div>
    </div>

</div>
