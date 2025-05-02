<?php

use Illuminate\Support\Facades\Route;

// API routes
Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});
