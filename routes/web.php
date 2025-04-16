<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\ResultExportController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/{user}/selection', [SelectionController::class, 'create'])->name('selections.create');
Route::post('/{user}/selection', [SelectionController::class, 'store'])->name('selections.store');
Route::get('/edit/{user}/selection', [SelectionController::class, 'edit'])->name('selections.edit');
Route::put('/update/{user}/selection', [SelectionController::class, 'update'])->name('selections.update');

Route::get('/users/export', [UserController::class, 'export'])->name('users.export');
Route::put('/users/update-status/{user}', [UserController::class, 'updateStatus'])->name('users.update-status');
Route::resource('users', UserController::class)->except(['create', 'store']);


Route::middleware('auth', AdminMiddleware::class)->group(function () {
    Route::get('/stats', [UserController::class, 'index'])->name('stats');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
