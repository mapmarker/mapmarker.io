@extends('layouts.app-nav')

@section('seo-title')Icon Stacks using Font Awesome 6 - MapMarker.io @endsection
@section('seo-description')Create custom stacked icon based map markers using the appearance of Font Awesome 6. @endsection

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icon Stacks</h2>
                    <p>You can generate complex icons to convey important attributes when rendering lots of data on a map.
                        This will help improve your users understanding of what is going on when lots of things are moving.
                    </p>
                    <x-marker-creator endpoint="/api/v3/font-awesome/v6/icon-stack" :fields="[
                        'size',
                        'icon' => ['value' => 'fa-solid fa-map-pin'],
                        'iconsize' => ['value' => 35],
                        'color' => ['value' => '8F2BDB'],
                        'on' => ['value' => 'fa-solid fa-map'],
                        'oncolor' => ['value' => 'BC5AF4'],
                        'hoffset' => ['value' => 0],
                        'voffset' => ['value' => 0],
                    ]" />
                </x-docs-box>
            </div>
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icon Stacks with Text</h2>
                    <p>You can also render text on top of the icon stack to label markers (e.g. zone codes, counts, or identifiers).
                        Combine two circles to create a border effect and position text in the center.
                    </p>
                    <x-marker-creator endpoint="/api/v3/font-awesome/v6/icon-stack" :fields="[
                        'size',
                        'icon' => ['value' => 'fa-solid fa-circle'],
                        'iconsize' => ['value' => 65],
                        'color' => ['value' => '28a745'],
                        'on' => ['value' => 'fa-solid fa-circle'],
                        'oncolor' => ['value' => 'FFFFFF'],
                        'text' => ['value' => 'A1'],
                        'text_color' => ['value' => 'FFF'],
                        'textsize' => ['value' => 25],
                        'text_hoffset' => ['value' => 0],
                        'text_voffset' => ['value' => 0],
                    ]" />
                </x-docs-box>
            </div>

            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icon Stacks with Labels</h2>
                    <p>Just like icons and pins, icon stacks support labels &mdash; a small colored circle with text in
                        the bottom-right corner of the marker. This is great for showing a count, status, or short code
                        alongside a stacked marker. Add the <code>label</code> parameter with the text you want to show.
                        Note that this is separate from the <code>text</code> parameter, which renders centered on top of
                        the stack.</p>

                    <div class="not-prose flex flex-wrap items-end gap-8 my-8">
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon-stack?size=100&icon=fa-solid%20fa-map-pin&iconsize=35&color=8F2BDB&on=fa-solid%20fa-map&oncolor=BC5AF4&label=3&lc=D9534F" alt="Icon stack with a red label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">label=3</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon-stack?size=100&icon=fa-solid%20fa-truck&iconsize=45&color=FFF&on=fa-solid%20fa-circle&oncolor=333&label=!&lc=F0AD4E&lfc=000" alt="Icon stack with an amber label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">lc=F0AD4E&amp;lfc=000</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon-stack?size=100&icon=fa-solid%20fa-warehouse&iconsize=40&color=FFF&on=fa-solid%20fa-circle&oncolor=28a745&label=12&lc=8F2BDB" alt="Icon stack with a purple label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">lc=8F2BDB</figcaption>
                        </figure>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="w-1 text-lg pr-4">Parameter</th>
                                <th class="w-1 text-lg">Example</th>
                                <th class="text-lg">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-mono font-black pr-4">label</td>
                                <td class="font-mono">3</td>
                                <td>The text shown inside the label circle. Keep it short (1&ndash;3 characters) so it fits.</td>
                            </tr>
                            <tr>
                                <td class="font-mono font-black pr-4">lc</td>
                                <td class="font-mono">D9534F</td>
                                <td>The fill color of the label circle (hex, without the leading <code>#</code>).</td>
                            </tr>
                            <tr>
                                <td class="font-mono font-black pr-4">lfc</td>
                                <td class="font-mono">FFF</td>
                                <td>The color of the label text (hex, without the leading <code>#</code>).</td>
                            </tr>
                            <tr>
                                <td class="font-mono font-black pr-4">lf</td>
                                <td class="font-mono">Arial</td>
                                <td>The font family used for the label text.</td>
                            </tr>
                        </tbody>
                    </table>
                </x-docs-box>
            </div>

            <div class="col-span-3">
                <x-docs-box>
                    <h2>Animated Labels</h2>
                    <p>Animate the label to make an icon stack stand out on a busy map. Add the
                        <code>labelAnimation</code> parameter with one of <code>blink</code>, <code>ping</code>, or
                        <code>pulse</code>, and optionally tune the speed with <code>labelAnimationDuration</code>
                        (e.g. <code>1s</code>). The animation is embedded directly in the SVG, so it plays automatically
                        wherever the image is rendered.</p>

                    <div class="not-prose flex flex-wrap items-end gap-8 my-8">
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon-stack?size=100&icon=fa-solid%20fa-truck&iconsize=45&color=FFF&on=fa-solid%20fa-circle&oncolor=333&label=3&lc=D9534F&labelAnimation=blink&labelAnimationDuration=1s" alt="Icon stack with a blinking label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">labelAnimation=blink</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon-stack?size=100&icon=fa-solid%20fa-truck&iconsize=45&color=FFF&on=fa-solid%20fa-circle&oncolor=333&label=3&lc=D9534F&labelAnimation=ping&labelAnimationDuration=1s" alt="Icon stack with a pinging label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">labelAnimation=ping</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon-stack?size=100&icon=fa-solid%20fa-truck&iconsize=45&color=FFF&on=fa-solid%20fa-circle&oncolor=333&label=3&lc=D9534F&labelAnimation=pulse&labelAnimationDuration=1s" alt="Icon stack with a pulsing label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">labelAnimation=pulse</figcaption>
                        </figure>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="w-1 text-lg pr-4">Parameter</th>
                                <th class="w-1 text-lg">Example</th>
                                <th class="text-lg">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-mono font-black pr-4">labelAnimation</td>
                                <td class="font-mono">pulse</td>
                                <td>The animation applied to the label. One of <code>blink</code>, <code>ping</code>, or <code>pulse</code>.</td>
                            </tr>
                            <tr>
                                <td class="font-mono font-black pr-4">labelAnimationDuration</td>
                                <td class="font-mono">1s</td>
                                <td>How long one animation cycle takes, as a CSS duration (e.g. <code>1s</code>, <code>500ms</code>). Defaults to <code>1s</code>.</td>
                            </tr>
                        </tbody>
                    </table>
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
