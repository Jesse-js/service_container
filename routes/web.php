<?php

use App\Exemplo;
use Illuminate\Support\Facades\Route;

// app()->bind(Exemplo::class, function () {
//     return new \App\Exemplo;
// });

Route::get('/', function () {
    $exemplo = app()->make(Exemplo::class);

    dd($exemplo);
});
