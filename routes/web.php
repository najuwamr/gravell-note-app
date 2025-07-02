<?php

use App\Http\Controllers\AuthGoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Google Login Only
|--------------------------------------------------------------------------
*/


Route::get('/', fn() => view('auth.login'))->name('login');

Route::prefix('auth')->group(function () {
    Route::get('/redirect', [AuthGoogleController::class, 'redirect'])->name('auth.redirect');
    Route::get('/callback', [AuthGoogleController::class, 'callback'])->name('auth.callback');
    Route::post('/logout', [AuthGoogleController::class, 'logout'])->name('auth.logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::prefix('projects')->group(function () {
        Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
    });
    Route::prefix('notes')->group(function () {
        Route::get('/create', [NoteController::class, 'create'])->name('notes.create');
    });
});
