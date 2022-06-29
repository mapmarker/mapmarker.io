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
                        <div id="map-mapbox" style="height: 200px;"></div>
                    </div>
                    <script type="text/javascript">
                        /* global mapboxgl */
                        mapboxgl.accessToken =
                            'pk.eyJ1Ijoiam9uYXN3ZWlnZXJ0IiwiYSI6ImNqNXZnN2l3NTAxbHQycW45NXAxNmxucmoifQ.9d8LgKdMikrFzwYb0qyeaQ';
                        var map = new mapboxgl.Map({
                            container: 'map-mapbox',
                            style: 'mapbox://styles/mapbox/streets-v10',
                            center: [-65.017, -16.457],
                            zoom: 5
                        });

                        map.scrollZoom.disable();

                        var markerElement = document.createElement('div');
                        markerElement.style.backgroundImage =
                            "url('{{ config('app.url') }}/api/v2/font-awesome/v5/pin?icon=fa-star-solid&size=50&hoffset=0&voffset=-1')";
                        markerElement.style.width = '50px';
                        markerElement.style.height = '50px';

                        var marker = new mapboxgl.Marker(markerElement, {
                                offset: [-25, -50]
                            })
                            .setLngLat([-65.017, -16.457])
                            .addTo(map);
                    </script>
                    <pre>var markerElement = document.createElement('div');
markerElement.style.backgroundImage = "url('{{ config('app.url') }}/api/v2/font-awesome/v5/pin?icon=fa-star-solid&size=50&hoffset=0&voffset=-1')";
markerElement.style.width = '50px';
markerElement.style.height = '50px';

var marker = new mapboxgl.Marker(markerElement, {offset: [-25, 50]})
    .setLngLat([-65.017, -16.457])
    .addTo(map);
</pre>
                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
