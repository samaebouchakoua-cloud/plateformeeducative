<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // accueil public
    return view('public.home');
});

// authentication
Route::view('/login','auth.login');
Route::view('/register','auth.register');
Route::view('/password/reset','auth.password_reset');

// student
Route::view('/student/dashboard','student.dashboard');
Route::view('/student/challenges','student.challenges.index');
Route::view('/student/challenges/{id}','student.challenges.show');
Route::view('/student/challenges/{id}/question','student.challenges.question');
Route::view('/student/challenges/{id}/result','student.challenges.result');
Route::view('/student/leaderboard','student.leaderboard');
Route::view('/student/profile','student.profile');

// teacher
Route::view('/teacher/dashboard','teacher.dashboard');
Route::view('/teacher/challenges','teacher.challenges.index');
Route::view('/teacher/challenges/create','teacher.challenges.create');
Route::view('/teacher/questions','teacher.questions.index');
Route::view('/teacher/results','teacher.results');

// admin
Route::view('/admin/dashboard','admin.dashboard');
Route::view('/admin/users','admin.users.index');
Route::view('/admin/challenges','admin.challenges.index');
Route::view('/admin/questions','admin.questions.index');
Route::view('/admin/stats','admin.stats');
Route::view('/admin/settings','admin.settings.index');
