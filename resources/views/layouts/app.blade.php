<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Quiz') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Sriracha' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <livewire:styles/>
</head>
<body>
<div id="app">
    <main>
        <div class="uk-section uk-section-xsmall uk-light">
            <div class="uk-container uk-container-expand uk-text-center">
                @yield('content')
                <hr>
                <h1 class="uk-text-center uk-margin-remove">{{env('APP_NAME')}}</h1>
                <div class="uk-text-small">Use the left and right arrow keys to navigate</div>
            </div>
        </div>
    </main>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
<livewire:scripts/>
<script>
    window.livewire.on('redirect', redirect => {
        window.location = redirect;
    })
</script>
</body>
</html>
