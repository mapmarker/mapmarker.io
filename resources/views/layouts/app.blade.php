<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M49WX379LE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-M49WX379LE');
    </script>

    <!-- SEO -->
    <link rel="canonical" href="https://www.mapmarker.io/{{ request()->path() }}" />
    <meta name="google-site-verification" content="RC96bUWVuDpuroWlQAckYhJ4GOCR0g5U7vaREIiZm8I" />


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('seo-title')MapMarker @show</title>
    <meta name="description" content="@section('seo-description')Custom map markers for better user-experience.@show">
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
