<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/dashboard-siakad');
});

Route::get('/login', function () {
    return view('pages/auth-login');
})->name('login');

Route::get('/register', function () {
    return view('pages/auth-register');
})->name('register');

Route::get('/forgot', function () {
    return view('pages/auth-forgot-password');
})->name('forgot');

Route::get('/reset-password', function () {
    return view('pages/auth-reset-password');
})->name('reset-password');






