<?php

use Illuminate\Support\Facades\Route;

app()->bind('Exemplo', function () {
    return new \App\Exemplo;
});

Route::get('/', function () {
    $exemplo = app()->make('Exemplo');

    dd($exemplo);
});
