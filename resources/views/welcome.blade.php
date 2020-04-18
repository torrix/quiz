@extends('layouts.app')

@section('content')
    <p data-uk-height-viewport="expand: true" class="uk-flex uk-flex-middle uk-flex-center">
        <a href="/play" class="uk-button uk-button-default uk-button-large">
            Start Playing
        </a>
    </p>

    <script>
        document.addEventListener('keydown', event => {
            if (event.code === 'ArrowRight') {
                window.location = '/play';
            }
        });
    </script>
@endsection
