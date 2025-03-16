<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ResultExportController;
use App\Http\Controllers\UserController;

Route::get('/export-results/{stage}', [ResultExportController::class, 'export'])->name('results.export');
Route::get('/quiz/results/{stage}', [QuizController::class, 'showResults'])->name('quiz.results');

Route::get('/settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');

Route::get('/', function () {
    return view('landing');
    // return redirect()->route('lobby');  // Mengarahkan user ke lobby
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/lobby', [QuizController::class, 'lobby'])->name('lobby');
    Route::get('/quiz/penyisihan/{index?}', [QuizController::class, 'showQuestion'])->name('quiz.penyisihan');
    // Route::get('/quiz/final/{index?}', [QuizController::class, 'showQuestion'])->name('quiz.final');

    Route::post('/quiz/submit', [QuizController::class, 'submitAnswer'])->name('quiz.submit');
    Route::get('/quiz/details/{user_id}', [QuizController::class, 'showDetails'])->name('quiz.details');
    Route::get('/leaderboard', [QuizController::class, 'showLeaderboard'])->name('quiz.leaderboard');
    Route::get('/quiz/{quiz_stage}/question/{index}', [QuizController::class, 'showQuestion'])->name('quiz.next_question');
});

// Route::middleware(['auth', IsAdmin::class])->group(function () {
//     Route::get('/dashboard', [QuizController::class, 'dashboard'])->name('dashboard');
//     Route::get('/questions', [QuizController::class, 'indexQuestions'])->name('questions.index');
//     Route::get('/questions/create', [QuizController::class, 'createQuestion'])->name('questions.create');
//     Route::post('/questions', [QuizController::class, 'storeQuestion'])->name('questions.store');
//     Route::get('/questions/{question}/edit', [QuizController::class, 'editQuestion'])->name('questions.edit');
//     Route::put('/questions/{question}', [QuizController::class, 'updateQuestion'])->name('questions.update');
//     Route::delete('/questions/{question}', [QuizController::class, 'destroyQuestion'])->name('questions.destroy');
// });

// AJAX
Route::post('/questions/{id}/update-stage', [QuizController::class, 'updateStage'])->name('questions.update-stage');

require __DIR__ . '/auth.php';
