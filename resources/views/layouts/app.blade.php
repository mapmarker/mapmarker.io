<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MapMarker</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @section('scripts') @show
</head>

<body class="antialiased bg-zinc-900 p-2 md:p-10">
    <x-buy-me-a-coffee-banner />
    @section('nav') @show
    <div class="min-h-screen">
        @section('content') @show
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
