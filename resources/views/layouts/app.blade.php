<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Quiz') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Sriracha' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<script>
    const LEFT_ARROW = 37;
    const RIGHT_ARROW = 39;
</script>
<div id="app">
    <main>
        <div class="uk-section uk-light">
            <div class="uk-container uk-text-center">
                @yield('content')
            </div>
        </div>
    </main>
</div>
{{--
<audio autoplay loop>
    <source src="/public/mp3/bg.mp3" type="audio/mp3">
    <embed src="/public/mp3/bg.mp3" autostart="true" loop="true" hidden="true">
</audio>
--}}
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
</body>
</html>
