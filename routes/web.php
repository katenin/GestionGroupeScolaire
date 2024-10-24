<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;

Route::get('/', function () {
    return view('bienvenu');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('eleves', EleveController::class);
