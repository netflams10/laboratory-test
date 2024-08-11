<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/auth/login', [\App\Http\Controllers\Auth\AuthController::class, 'login']);