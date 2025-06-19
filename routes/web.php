<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/blogs/1', function () {
    return Inertia::render('blogs/BlogDetail');
})->name('blogs.show');

Route::get('/login', function () {
    return Inertia::render('auth/Login');
})->name('auth.login');

Route::get('/register', function () {
    return Inertia::render('auth/Register');
})->name('auth.register');
