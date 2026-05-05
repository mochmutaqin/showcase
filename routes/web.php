<?php

use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ShowcaseController::class, 'index']);
    Route::get('/showcase/{id}', [ShowcaseController::class, 'show']);
});

Route::get('/unit/{serial}', [ShowcaseController::class, 'unit']); // publik