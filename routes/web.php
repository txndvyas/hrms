<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/reset-password', function () {
    return view('auth.passwords.reset');
});

Route::get('/{any}', function () {
    return view('home');
})->where('any', '.*');
