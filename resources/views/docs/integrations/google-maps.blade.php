@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Google Maps Integration</h2>
                    <p>Here is a quick code sample that demonstrates how to use our map markers with Google Maps.</p>

                    <div class="rounded-lg overflow-hidden">
                        <div id="map-google" style="height: 200px;"></div>
                    </div>
                    <script type="text/javascript">
                        /* global google */
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var map = new google.maps.Map(document.getElementById('map-google'), {
                                zoom: 4,
                                center: uluru,
                                scrollwheel: false,
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                icon: '{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
                                map: map
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtDklKj39S_87qAfy0NxxagiMsAHYiqhI&callback=initMap" async
                        defer type="text/javascript"></script>
                    <pre>function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map-google'), {
        zoom: 4,
        center: uluru
    });

    // a more conventional map pin
    var marker = new google.maps.Marker({
        position: uluru,
        icon: '{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
        map: map
    });

}</pre>

                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
