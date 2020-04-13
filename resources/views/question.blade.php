@extends('layouts.app')

@section('content')
    <h1>{{$roundName}}</h1>
    <h2>Question {{$questionNumber}}</h2>
    <p data-uk-height-viewport="expand: true">
        {{$question}}
    </p>
    @if ($showAnswers)
        <div class="uk-alert uk-alert-success uk-animation-fade">
            {{$answer}}
        </div>
    @endif
    @if ($nextQuestion)
        <p>
            @if ($showAnswers)
                <a href="/{{$quiz}}/answers/{{$nextQuestion}}" class="uk-button uk-button-primary uk-button-large">
                    Next Answer
                </a>
            @else
                <a href="/{{$quiz}}/{{$nextQuestion}}" class="uk-button uk-button-primary uk-button-large">
                    Next Question
                </a>
            @endif
        </p>
    @else
        @if ($showAnswers)
            <h2>Thanks for playing!</h2>
        @else
            <p>
                <a href="/{{$quiz}}/answers/1" class="uk-button uk-button-primary uk-button-large">
                    Answers
                </a>
            </p>
        @endif
    @endif
@endsection
