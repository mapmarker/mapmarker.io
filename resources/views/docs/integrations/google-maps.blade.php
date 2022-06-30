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
                                icon: '{{ config('app.url') }}/api/v2/font-awesome/v5/pin?icon=fa-star-solid&size=50&hoffset=0&voffset=-1',
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
        icon: '{{ config('app.url') }}/api/v2/font-awesome/v5/pin?icon=fa-star-solid&size=50&hoffset=0&voffset=-1',
        map: map
    });
    
    // a square icon whose center is on the lat / long
    var circle = new google.maps.Marker({
        position: {lat: 37.827125, lng: -122.422844},
        map: map,
        icon: {
            size: new google.maps.Size(120, 120),
            scaledSize: new google.maps.Size(60,60),
            url: 'https://cdn.mapmarker.io/api/v1/fa?size=120&icon=fa-bullseye&color=%23D33115',
            anchor: new google.maps.Point(30, 30),
        },
        title: "Alert",
    });
    
}</pre>

                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
