@extends('layouts.app-nav')

@section('content')
    <x-docs-layout>
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3">
                <x-docs-box class="mb-8">
                    <h2 id="static-icons">
                        <a href="#static-icons" class="no-underline">
                            Bing Maps Integration
                        </a>
                    </h2>
                    <p>Here is a quick code sample that demonstrates how to use our map markers with Bing Maps.</p>

                    <p>
                        <strong>Important for animated map markers: </strong>
                        Bing Maps renders all shapes on an HTML 5 canvas which ends up flattening images and disables any animation
                        they might have built in. <strong>In this case its likely only rendering the first frame of your animated image</strong>
                        which may be the reason why it can't be seen. The solution is to use an "HTML Pushpin": <a href="#animated-icons">Read more.</a>
                    </p>

                    <div class="rounded-lg overflow-hidden">
                        <div id="map-bing-simple" style="height:400px"></div>
                    </div>
                    <script type="text/javascript">
                        /* global Microsoft */
                        function loadBasicMapScenario() {
                            var map = new Microsoft.Maps.Map(document.getElementById('map-bing-simple'), {
                                credentials: '4Dwl9bv4EyWxxh5vxGrc~DQVhL9QibE1uVG3H0y3ESw~Atmr7fRt7VzikgATJcQAzGBsq-fs9Ac6xCv4yPh0ScskuqonEIFN_vGCjn606TiN',
                                disableScrollWheelZoom: true
                            });

                            var loc = new Microsoft.Maps.Location(-25.34492034440821, 131.0329830613222);

                            var pushpin = new Microsoft.Maps.Pushpin(loc, {
                                icon: '{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
                                anchor: new Microsoft.Maps.Point(25, 50)
                            });
                            map.entities.push(pushpin);
                            map.setView({ center: loc, zoom: 12 });

                        }
                    </script>

                    <pre>var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
    credentials: 'Your Bing Maps Key'
});

var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), {
    icon: '{{ config('app.url') }}/api/v3/font-awesome/v6/pin?icon=fa-solid+fa-star&size=50&hoffset=0&voffset=-1',
    // define an anchor point at the bottom middle of pin markers to avoid visual shift during zooms
    // for non-pin style markers, you probably won't need this
    anchor: new Microsoft.Maps.Point(25, 50)
});

map.entities.push(pushpin);</pre>

                </x-docs-box>

                <x-docs-box>
                    <h2 id="animated-icons" class="mt-0">
                        <a href="#animated-icons" class="no-underline">
                            Bing Maps Animated Icons via HTML Pushpin
                        </a>
                    </h2>
                    <p>Here is a quick code sample that demonstrates how to use our animated map markers with Bing Maps:</p>

                    <ol>
                        <li>Initialize Bing Map</li>
                        <li>Initialize Bing Map HtmlPushpinLayerModule Module</li>
                        <li>Async Load MapMarker.io Icon</li>
                        <li>Add Icon to HtmlPushpinLayer</li>
                        <li>Add HtmlPushpinLayer to Bing Map</li>
                    </ol>

                    <div class="rounded-lg overflow-hidden">
                        <div id="map-bing-html-pushpin" style="height:400px"></div>
                    </div>
                    <script type="text/javascript">
                        /* global Microsoft */
                        function loadHtmlPushpinMap() {

                            var map = new Microsoft.Maps.Map(document.getElementById('map-bing-html-pushpin'), {
                                credentials: '4Dwl9bv4EyWxxh5vxGrc~DQVhL9QibE1uVG3H0y3ESw~Atmr7fRt7VzikgATJcQAzGBsq-fs9Ac6xCv4yPh0ScskuqonEIFN_vGCjn606TiN',
                                disableScrollWheelZoom: true
                            });

                            // initalize map
                            var loc = new Microsoft.Maps.Location(-25.34492034440821, 131.0329830613222);
                            map.setView({ center: loc, zoom: 12 });

                            // fetch html pushpin layer module (source: https://samples.bingmapsportal.com/overlays/html-pushpin-layer)
                            Microsoft.Maps.registerModule('HtmlPushpinLayerModule', 'https://samples.bingmapsportal.com//overlays/html-pushpin-layer/HtmlPushpinLayerModule.js');
                            Microsoft.Maps.loadModule('HtmlPushpinLayerModule', function () {

                                // fetch marker
                                const Http = new XMLHttpRequest();
                                const url='{{ config('app.url') }}/api/v3/font-awesome/v6/icon?size=50&icon=fa-solid%20fa-person-hiking&color=333&label=&labelAnimation=pulse&labelAnimationDuration=1s&lc=4CAF50';
                                Http.open("GET", url);
                                Http.send();

                                //  marker loaded callbakc
                                Http.onreadystatechange = function() {
                                    // marker available
                                    if(this.readyState == 4 && this.status == 200) {
                                        var pin = new HtmlPushpin(loc, Http.responseText, {anchor: new Microsoft.Maps.Point(25, 50)});
                                        layer = new HtmlPushpinLayer([pin]);
                                        map.layers.insert(layer);
                                    }
                                }
                            });

                        }
                    </script>

                    <pre>var map = new Microsoft.Maps.Map(document.getElementById('map-bing-html-pushpin'), {
    credentials: 'Your Bing Maps Key',
    disableScrollWheelZoom: true
});

// initalize map
var loc = new Microsoft.Maps.Location(-25.34492034440821, 131.0329830613222);
map.setView({ center: loc, zoom: 12 });

// fetch html pushpin layer module (source: https://samples.bingmapsportal.com/overlays/html-pushpin-layer)
Microsoft.Maps.registerModule('HtmlPushpinLayerModule', 'https://samples.bingmapsportal.com//overlays/html-pushpin-layer/HtmlPushpinLayerModule.js');
Microsoft.Maps.loadModule('HtmlPushpinLayerModule', function () {

    // fetch marker
    const Http = new XMLHttpRequest();
    const url='{{ config('app.url') }}/api/v3/font-awesome/v6/icon?size=50&icon=fa-solid%20fa-person-hiking&color=333&label=&labelAnimation=pulse&labelAnimationDuration=1s&lc=4CAF50';
    Http.open("GET", url);
    Http.send();

    //  marker loaded callbakc
    Http.onreadystatechange = function() {
        // marker available
        if(this.readyState == 4 && this.status == 200) {
            var pin = new HtmlPushpin(loc, Http.responseText, {anchor: new Microsoft.Maps.Point(25, 50)});
            layer = new HtmlPushpinLayer([pin]);
            map.layers.insert(layer);
        }
    }
});</pre>

                </x-docs-box>
            </div>
        </div>

        {{-- INITALIZE ALL MAPS ON PAGE --}}
        <script type="text/javascript">
            function loadMapScenarios() {
                loadBasicMapScenario();
                loadHtmlPushpinMap();
            }
        </script>
        <script type="text/javascript" src="https://www.bing.com/api/maps/mapcontrol?callback=loadMapScenarios" async defer></script>
    </x-docs-layout>
@endsection
