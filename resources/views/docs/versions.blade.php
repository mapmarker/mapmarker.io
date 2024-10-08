@extends('layouts.app-nav')

@section('seo-title')API Versions - MapMarker.io @endsection
@section('seo-description')We have been serving all versions of our APIs since 2016. For more details, check out the current support and development status of all of our API versions. @endsection

@section('content')
    <x-docs-layout>

        <x-docs-box class="mb-8">
            <x-icon-spectrum icon="fa-solid fa-boxes-stacked" iconClass="-mr-12 w-[49px]" />

            <h2>API Versions</h2>

            <p>
                We have a few different versions of our API live. This is because we understand what we offer developers: a
                simple reliable service that makes their job easier by ensuring their applications continue to work with
                minimal maintenance.
            </p>

            <table>
                <thead>
                    <tr>
                        <td>Version</td>
                        <td>Output&nbsp;Format</td>
                        <td>Year&nbsp;Introduced</td>
                        <td>Support&nbsp;Status</td>
                        <td>Description</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Legacy</td>
                        <td>png</td>
                        <td>2016</td>
                        <td class="text-orange-400">DEPRECATED</td>
                        <td>A POC so basic we didn't see the need for API versioning yet.</td>
                    </tr>
                    <tr>
                        <td>v1</td>
                        <td>png</td>
                        <td>2018</td>
                        <td class="text-green-400">LTS</td>
                        <td>Our fist versioned API capable of pins, icons, and icon stacks.</td>
                    </tr>
                    <tr>
                        <td>v2</td>
                        <td>png</td>
                        <td>2022</td>
                        <td class="text-green-400">LTS</td>
                        <td>We have learned a few things and made rendering icons even better.</td>
                    </tr>
                    <tr>
                        <td>v3</td>
                        <td>svg</td>
                        <td>2023</td>
                        <td class="text-green-400">Active Development</td>
                        <td>
                            We are working on SVG rendering for improved performance and appearance.
                        </td>
                    </tr>
                </tbody>
            </table>
        </x-docs-box>

        <x-docs-box>
            <h2>API Version &amp; Feature Compatibility</h2>

            <table>
                <thead>
                    <tr>
                        <td>Feature</td>
                        <td>Legacy</td>
                        <td>v1</td>
                        <td>v2</td>
                        <td>v3</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pins with Text</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                    </tr>
                    <tr>
                        <td>Pins with Icon</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                    </tr>
                    <tr>
                        <td>Icons</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                    </tr>
                    <tr>
                        <td>Icon Stacks</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                    </tr>
                    <tr>
                        <td>Font-Awesome 4</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-red-400">No</td>
                        <td class="text-red-400">No</td>
                    </tr>
                    <tr>
                        <td>Font-Awesome 5</td>
                        <td class="text-red-400">No</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-red-400">No</td>
                    </tr>
                    <tr>
                        <td>Font-Awesome 6</td>
                        <td class="text-red-400">No</td>
                        <td class="text-red-400">No</td>
                        <td class="text-red-400">No</td>
                        <td class="text-green-400">Yes</td>
                    </tr>
                    <tr>
                        <td>Improved Auto-Centering</td>
                        <td class="text-red-400">No</td>
                        <td class="text-red-400">No</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                    </tr>
                    <tr>
                        <td>Improved Sizing</td>
                        <td class="text-red-400">No</td>
                        <td class="text-red-400">No</td>
                        <td class="text-green-400">Yes</td>
                        <td class="text-green-400">Yes</td>
                    </tr>
                    <tr>
                        <td>Animations</td>
                        <td class="text-red-400">No</td>
                        <td class="text-red-400">No</td>
                        <td class="text-red-400">No</td>
                        <td class="text-orange-400">WIP</td>
                    </tr>
                </tbody>
            </table>
        </x-docs-box>

    </x-docs-layout>
@endsection
