<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ResultExportController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/stats', [UserController::class, 'stats'])->name('stats');
Route::get('/user/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
