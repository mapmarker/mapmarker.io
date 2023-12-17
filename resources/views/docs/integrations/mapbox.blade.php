@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Mapbox Integration</h2>
                    <p>Here is a quick code sample that demonstrates how to use our map markers with Mapbox.</p>

                    <script src='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js' type="text/javascript"></script>
                    <link href='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css' rel='stylesheet' />
                    <div class="rounded-lg overflow-hidden">
                        <div id="map-mapbox" style="height: 400px;"></div>
                    </div>
                    <script type="text/javascript">
                        /* global mapboxgl */
                        mapboxgl.accessToken =
                            'pk.eyJ1Ijoiam9uYXN3ZWlnZXJ0IiwiYSI6ImNqNXZnN2l3NTAxbHQycW45NXAxNmxucmoifQ.9d8LgKdMikrFzwYb0qyeaQ';
                        var map = new mapboxgl.Map({
                            container: 'map-mapbox',
                            style: 'mapbox://styles/mapbox/streets-v10',
                            // lng, lat
                            center: [131.0305958147815, -25.34821975486428],
                            zoom: 14
                        });

                        map.scrollZoom.disable();

                        var staticMarkerElement = document.createElement('div');
                        staticMarkerElement.style.backgroundImage =  "url('{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1')";
                        staticMarkerElement.style.width = '50px';
                        staticMarkerElement.style.height = '50px';
                        var staticMarker = new mapboxgl.Marker(staticMarkerElement, {
                                offset: [-25, -50]
                            })
                            // lng, lat
                            .setLngLat([131.0329830613222, -25.34492034440821])
                            .addTo(map);

                        var animatedMarkerElement = document.createElement('div');
                        animatedMarkerElement.style.backgroundImage =  "url('{{ config('app.url') }}/api/v3/font-awesome/v6/icon?size=50&icon=fa-solid%20fa-person-hiking&color=333&label=&labelAnimation=blink&labelAnimationDuration=1s&lc=4CAF50')";
                        animatedMarkerElement.style.width = '50px';
                        animatedMarkerElement.style.height = '50px';
                        var animatedMarker = new mapboxgl.Marker(animatedMarkerElement, {
                                offset: [-25, -25]
                            })
                            // lng, lat
                            .setLngLat([131.02711967211738, -25.35283491096011])
                            .addTo(map);
                    </script>
                    <pre>var markerElement = document.createElement('div');
markerElement.style.backgroundImage = "url('{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1')";
markerElement.style.width = '50px';
markerElement.style.height = '50px';

var marker = new mapboxgl.Marker(
        markerElement,

        // define an anchor point at the bottom middle of pin markers to avoid visual shift during zooms
        // for non-pin style markers, you probably won't need this
        {offset: [-25, 50]}
    )
    .setLngLat([-65.017, -16.457])
    .addTo(map);
</pre>
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
