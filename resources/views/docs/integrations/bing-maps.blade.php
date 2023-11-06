@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box>
                    <h2>Bing Maps Integration</h2>
                    <p>Here is a quick code sample that demonstrates how to use our map markers with Bing Maps.</p>
                    <div class="rounded-lg overflow-hidden">
                        <div id="map-bing" style="height:200px"></div>
                    </div>
                    <script type="text/javascript">
                        /* global Microsoft */
                        function loadMapScenario() {
                            var map = new Microsoft.Maps.Map(document.getElementById('map-bing'), {
                                credentials: '4Dwl9bv4EyWxxh5vxGrc~DQVhL9QibE1uVG3H0y3ESw~Atmr7fRt7VzikgATJcQAzGBsq-fs9Ac6xCv4yPh0ScskuqonEIFN_vGCjn606TiN',
                                disableScrollWheelZoom: true
                            });
                            var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), {
                                icon: '{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
                                anchor: new Microsoft.Maps.Point(12, 39)
                            });
                            map.entities.push(pushpin);

                        }
                    </script>
                    <script type="text/javascript" src='https://www.bing.com/api/maps/mapcontrol?callback=loadMapScenario' async defer>
                    </script>
                    <pre>var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
    credentials: 'Your Bing Maps Key'
});

var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), {
    icon: '{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
    anchor: new Microsoft.Maps.Point(12, 39)
});

map.entities.push(pushpin);</pre>

                </x-docs-box>
            </div>
        </div>
    </x-docs-layout>
@endsection
