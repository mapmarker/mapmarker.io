@extends('layouts.app-nav')

@section('seo-title')Pins using Font Awesome 6 - MapMarker.io @endsection
@section('seo-description')Create custom pin based map markers with custom text using the appearance of Font Awesome 6. @endsection

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Pin with Text</h2>
                    <p>You can generate pins with custom text labels. This is very helpful when trying to render lots of
                        data and you are trying to tie the map markers to other content on your page such as tables or
                        lists.</p>
                    <x-marker-creator endpoint="/api/v3/font-awesome/v6/pin" :fields="['text', 'size', 'color', 'background', 'hoffset', 'voffset']" />
                </x-docs-box>
            </div>
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Pin with Icon</h2>
                    <p>You can generate pins with icons as labels. This is very helpful when you render the same object
                        quite often but in different locations as it helps the user recognize it quickly. Plus you can
                        convey meaning easily.</p>
                    <x-marker-creator endpoint="/api/v3/font-awesome/v6/pin" :fields="[
                        'icon' => ['value' => 'fa-solid fa-star'],
                        'size',
                        'color',
                        'background',
                        'hoffset',
                        'voffset',
                    ]" />
                </x-docs-box>
            </div>

            <div class="col-span-3">
                <x-docs-box>
                    <h2>Pins with Labels</h2>
                    <p>Add a label to any pin to draw attention to it or convey status at a glance. A label is a small
                        colored circle with text placed in the bottom-right corner of the marker &mdash; perfect for
                        counts, statuses, or short identifiers. Just add the <code>label</code> parameter with the text
                        you want to show. Labels work on both text pins and icon pins.</p>

                    <div class="not-prose flex flex-wrap items-end gap-8 my-8">
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/pin?size=100&text=A&label=5&lc=D9534F" alt="Text pin with a red label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">label=5</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/pin?size=100&icon=fa-solid%20fa-star&color=FFF&label=!&lc=F0AD4E&lfc=000" alt="Icon pin with an amber label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">lc=F0AD4E&amp;lfc=000</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/pin?size=100&icon=fa-solid%20fa-location-dot&color=FFF&background=28a745&label=12&lc=8F2BDB" alt="Icon pin with a purple label" class="mx-auto" />
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
                                <td class="font-mono">5</td>
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
                    <p>Make labels stand out on a busy map by animating them. Add the <code>labelAnimation</code>
                        parameter with one of <code>blink</code>, <code>ping</code>, or <code>pulse</code>, and
                        optionally tune the speed with <code>labelAnimationDuration</code> (e.g. <code>1s</code>).
                        The animation is embedded directly in the SVG, so it plays automatically wherever the image is
                        rendered.</p>

                    <div class="not-prose flex flex-wrap items-end gap-8 my-8">
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/pin?size=100&icon=fa-solid%20fa-star&color=FFF&label=5&lc=D9534F&labelAnimation=blink&labelAnimationDuration=1s" alt="Pin with a blinking label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">labelAnimation=blink</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/pin?size=100&icon=fa-solid%20fa-star&color=FFF&label=5&lc=D9534F&labelAnimation=ping&labelAnimationDuration=1s" alt="Pin with a pinging label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">labelAnimation=ping</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/pin?size=100&icon=fa-solid%20fa-star&color=FFF&label=5&lc=D9534F&labelAnimation=pulse&labelAnimationDuration=1s" alt="Pin with a pulsing label" class="mx-auto" />
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
