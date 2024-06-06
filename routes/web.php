<?php

use App\Exemplo;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// app()->bind(Exemplo::class, function () {
//     return new \App\Exemplo;
// });

Route::get('/', [HomeController::class, 'index']);
