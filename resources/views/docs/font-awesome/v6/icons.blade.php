@extends('layouts.app-nav')

@section('seo-title')Icons using Font Awesome 5 - MapMarker.io @endsection
@section('seo-description')Create custom icon based map markers using the appearance of Font Awesome 5. @endsection

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icons</h2>
                    <p>You can generate icons easily to render contextual, easily recognizable enties in a user-friendly
                        manner.</p>
                    <x-marker-creator endpoint="/api/v3/font-awesome/v6/icon" :fields="['icon' => ['value' => 'fa-solid fa-star'], 'size', 'color' => ['value' => 'BC5AF4']]" />
                </x-docs-box>
            </div>

            <div class="col-span-3">
                <x-docs-box>
                    <h2>Icons with Labels</h2>
                    <p>Add a label to any icon to draw attention to it or convey status at a glance. A label is a small
                        colored circle with text placed in the bottom-right corner of the marker &mdash; perfect for
                        counts, statuses, or short identifiers. Just add the <code>label</code> parameter with the text
                        you want to show.</p>

                    <div class="not-prose flex flex-wrap items-end gap-8 my-8">
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon?size=100&icon=fa-solid%20fa-person-hiking&color=333&label=5&lc=D9534F" alt="Icon with a red label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">label=5</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon?size=100&icon=fa-solid%20fa-triangle-exclamation&color=333&label=!&lc=F0AD4E&lfc=000" alt="Icon with an amber label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">lc=F0AD4E&amp;lfc=000</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon?size=100&icon=fa-solid%20fa-map-location&color=333&label=12&lc=28a745" alt="Icon with a green label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">lc=28a745</figcaption>
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
                            <img src="/api/v3/font-awesome/v6/icon?size=100&icon=fa-solid%20fa-person-hiking&color=333&label=5&lc=D9534F&labelAnimation=blink&labelAnimationDuration=1s" alt="Icon with a blinking label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">labelAnimation=blink</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon?size=100&icon=fa-solid%20fa-person-hiking&color=333&label=5&lc=D9534F&labelAnimation=ping&labelAnimationDuration=1s" alt="Icon with a pinging label" class="mx-auto" />
                            <figcaption class="mt-2 text-sm text-gray-400">labelAnimation=ping</figcaption>
                        </figure>
                        <figure class="text-center">
                            <img src="/api/v3/font-awesome/v6/icon?size=100&icon=fa-solid%20fa-person-hiking&color=333&label=5&lc=D9534F&labelAnimation=pulse&labelAnimationDuration=1s" alt="Icon with a pulsing label" class="mx-auto" />
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
