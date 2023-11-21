{{-- ACTIVE --}}
<button
    x-on:click="experience = '{{ $experience }}'"
    :class="{
        'text-center text-gray-200 group relative min-w-0 flex-1 overflow-hidden bg-gray-800 py-4 px-4 text-center text-sm font-medium hover:bg-gray-800 focus:z-10': experience ==  '{{ $experience }}',
        'text-center text-gray-200 group relative min-w-0 flex-1 overflow-hidden bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-800 focus:z-10': experience !=  '{{ $experience }}'}">

    @if($experience == 'pin-with-text')
        <img src="/api/v3/font-awesome/v6/pin?text=AC&background=BC5AF4&size=40" class="mx-auto mb-2">
        <span>Pin with Text</span>
    @elseif($experience == 'pin-with-icon')
        <img src="/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&background=BC5AF4&size=40" class="mx-auto mb-2">
        <span>Pin with Icon</span>
    @elseif($experience == 'icon')
        <img src="/api/v3/font-awesome/v6/icon?icon=fa-solid+fa-box&color=BC5AF4&size=40" class="mx-auto mb-2">
        <span>Icon</span>
    @elseif($experience == 'icon-stack')
        <img src="/api/v3/font-awesome/v6/icon-stack?size=40&icon=fa-solid+fa-dollar-sign&color=FFF&on=fa-solid+fa-truck&oncolor=BC5AF4&iconsize=15&voffset=-4&hoffset=-7" class="mx-auto mb-2">
        <span>Icon Stack</span>
    @endif

    <span aria-hidden="true" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"
    :class="{
        'bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5': experience ==  '{{ $experience }}',
        'bg-transparent absolute inset-x-0 bottom-0 h-0.5': experience !=  '{{ $experience }}'}"></span>
</button>
