<?php
use App\Http\Controllers\ShowcaseController;

Route::get('/', function () {
    return "Laravel OK";
});

Route::get('/dashboard', [ShowcaseController::class, 'index']);
Route::get('/showcase/{id}', [ShowcaseController::class, 'show']);
Route::get('/unit/{serial}', [ShowcaseController::class, 'unit']);