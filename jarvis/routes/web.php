<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', [IntroductionController::class, 'index']);
