<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    static function () {
        return view('welcome');
    }
);

Route::livewire('/play', 'question');

Route::get('/{quiz}/{question}', 'QuestionController@question');
Route::get('/{quiz}/answers/{question}', 'QuestionController@answer');

