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

Route::get('/stats', [UserController::class, 'index'])->name('stats');
Route::get('/users/export', [UserController::class, 'export'])->name('users.export');
Route::resource('users', UserController::class)->except(['create', 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
