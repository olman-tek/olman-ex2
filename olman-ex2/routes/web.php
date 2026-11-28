<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EquipoController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('throttle:6,1')->name('login.store');

Route::middleware('auth')->group(function () {
    Route::get('/inicio', function () {
        return redirect()->route('equipos.index');
    })->name('inicio');
    Route::get('/equipos', [EquipoController::class, 'index'])
        ->name('equipos.index');
    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');
});