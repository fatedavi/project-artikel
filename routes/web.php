<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\BorrowingController;

Route::get('/', function () {
    return view('home');
});


Route::get('/posts', [PostController::class, 'index']); // Menampilkan form & daftar post
Route::post('/posts', [PostController::class, 'store']); // Menyimpan post baru



// Tampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::resource('books', BookController::class)->middleware('checkrole:admin');
Route::resource('pinjam', PinjamController::class)->middleware('checkrole:user');

Route::get('/list-pinjam', [PinjamController::class, 'listPinjam'])->name('pinjam.list');
Route::patch('/pinjam/{id}/return', [PinjamController::class, 'returnBook'])->name('pinjam.return');


Route::post('/pinjam', [BorrowingController::class, 'store'])->name('pinjam.store');