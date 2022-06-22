<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MapMarker</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 items-center">
        <div class="text-center">
            <div>
                <img alt="MapMarker Logo" height="100"
                    src="/api/v1/font-awesome/v5/icon-stack?size=200&icon=fa-map-marker-alt&color=626BE9&on=fa-map-solid&oncolor=44444&iconsize=48&hoffset=66&voffset=20">
            </div>
            <div class="text-sm text-gray-500">
                {{ config('app.version') }}
            </div>
        </div>
    </div>
</body>

</html>
