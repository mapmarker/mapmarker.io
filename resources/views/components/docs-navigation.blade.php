<div>
    {{-- MOBILE --}}
    <nav class="block md:hidden mb-8">
        <select name="DocsNavigation"
            class="block w-full text-gray-200 bg-gray-700 hover:bg-gray-800 rounded-md border-gray-900 focus:border-indigo-500 focus:ring-indigo-500"
            x-data="{url: '/{{ request()->path() }}'}"
            x-init="$watch('url', value => window.location.href=value)"
            x-model="url">

            @foreach($linkGroups as $group => $links)
            <optgroup label="{{ $group }}">
                @foreach($links as $label => $url)
                    <option value="{{ $url }}">{{ $label }}</option>
                @endforeach
            </optgroup>
            @endforeach
        </select>
    </nav>

    {{-- DESKTOP --}}
    <nav class="hidden md:block">
        @foreach($linkGroups as $group => $links)
        <div class="mb-6">

            @if($group)
            <div class="text-black text-sm text-slate-300 mb-2">{{ $group }}</div>
            @endif

            @foreach($links as $label => $url)
            <a href="{{ $url }}" class="block mb-1">{{ $label }}</a>
            @endforeach
        </div>
        @endforeach
    </nav>
</div>
