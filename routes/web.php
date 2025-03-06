<?php

use Illuminate\Support\Facades\Route;

Route::get('/my-laravel-package', function () {
    return response()->json(['message' => 'Hello from my Laravel package'], 200);
});