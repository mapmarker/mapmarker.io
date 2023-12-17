@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Google Maps Integration</h2>
                    <p>Here is a quick code sample that demonstrates how to use our map markers with Google Maps.</p>

                    <div class="rounded-lg overflow-hidden">
                        <div id="map-google" style="height: 400px;"></div>
                    </div>
                    <script type="text/javascript">
                        /* global google */
                        function initMap() {
                            var map = new google.maps.Map(document.getElementById('map-google'), {
                                zoom: 14,
                                center: {
                                    lat: -25.34821975486428,
                                    lng: 131.0305958147815
                                },
                                scrollwheel: false,
                            });

                            var staticMarker = new google.maps.Marker({
                                position: {
                                    lat: -25.34492034440821,
                                    lng: 131.0329830613222,
                                },
                                icon: {
                                    url:'{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
                                    anchor: new google.maps.Point(25, 50),
                                },
                                map: map
                            });

                            var animatedMarker = new google.maps.Marker({
                                position: {
                                    lat: -25.35283491096011,
                                    lng: 131.02711967211738,
                                },
                                icon: {
                                    url:'{{ config('app.url') }}/api/v3/font-awesome/v6/icon?size=50&icon=fa-solid%20fa-person-hiking&color=333&label=&labelAnimation=blink&labelAnimationDuration=1s&lc=4CAF50',
                                    anchor: new google.maps.Point(25, 25),
                                },
                                map: map
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtDklKj39S_87qAfy0NxxagiMsAHYiqhI&callback=initMap" async
                        defer type="text/javascript"></script>
                    <pre>function initMap() {
    var map = new google.maps.Map(document.getElementById('map-google'), {
        zoom: 14,
        center: {
            lat: -25.34821975486428,
            lng: 131.0305958147815
        },
        scrollwheel: false,
    });

    var staticMarker = new google.maps.Marker({
        position: {
            lat: -25.34492034440821,
            lng: 131.0329830613222,
        },
        icon: {
            url:'{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
            anchor: new google.maps.Point(25, 50),
        },
        map: map
    });

    var animatedMarker = new google.maps.Marker({
        position: {
            lat: -25.35283491096011,
            lng: 131.02711967211738,
        },
        icon: {
            url:'{{ config('app.url') }}/api/v3/font-awesome/v6/icon?size=50&icon=fa-solid%20fa-person-hiking&color=333&label=!&labelAnimation=blink&labelAnimationDuration=1s&lc=f56565',
        },
        map: map
    });
}</pre>

                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
