<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Resources\BlogResource;
use App\Http\Resources\CommentResource;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomeController::class);

Route::resource('/blogs', BlogController::class);

Route::resource('/tags', TagController::class);

Route::get('/comments', function () {
    return CommentResource::collection(Comment::all());
});

Route::get('/login', function () {
    return Inertia::render('auth/Login');
})->name('auth.login');

Route::get('/register', function () {
    return Inertia::render('auth/Register');
})->name('auth.register');
