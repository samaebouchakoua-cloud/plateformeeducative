<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChallengeController;

Route::get('/', function () {
    return redirect()->route('challenges.index');
});

Route::resource('questions', QuestionController::class);
Route::resource('challenges', ChallengeController::class);

// Maquettes Authentification (Statiques)
Route::get('/login', function () { return view('auth.login'); });
Route::get('/register', function () { return view('auth.register'); });
Route::get('/forgot-password', function () { return view('auth.forgot-password'); });
Route::get('/reset-password', function () { return view('auth.reset-password'); });
