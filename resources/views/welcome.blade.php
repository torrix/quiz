@extends('layouts.app')

@section('content')
    <p data-uk-height-viewport="expand: true" class="uk-flex uk-flex-middle uk-flex-center">
        <a href="/play?question=1" class="uk-button uk-button-default uk-button-large">
            Start Playing
        </a>
    </p>

    <script>
        document.addEventListener('keydown', event => {
            if (event.code === 'ArrowRight') {
                window.location = '/play?question=1';
            }
        });
    </script>
@endsection
