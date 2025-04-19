<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']); // Menampilkan form & daftar post
Route::post('/posts', [PostController::class, 'store']); // Menyimpan post baru