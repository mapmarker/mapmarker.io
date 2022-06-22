<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MapMarker</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased bg-zinc-900 text-gray-50">
    @section('nav') @show
    <div class="min-h-screen pt-16">
        @section('content') @show
    </div>
</body>

</html>
