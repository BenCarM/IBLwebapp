<?php

use App\Http\Controllers\SkinTypesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/body', function () {
    return view('body');
});

Route::get('/body2', function () {
    return view('body2');
});
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('/quiz2', function () {
    return view('quiz2');
});
Route::get('/quiz3', function () {
    return view('quiz3');
});
Route::get('/quiz4', function () {
    return view('quiz4');
});
Route::get('/quiz5', function () {
    return view('quiz5');
});
Route::get('/dryskin', function () {
    return view('dryskin');
});
Route::get('/oilyskin', function () {
    return view('oilyskin');
});
Route::get('/combinationskin', function () {
    return view('combinationskin');
});
Route::get('/', [App\Http\Controllers\MyController::class, 'showBody']
);

Route::get('/create', [SkinTypesController::class ,'create']);
Route::get('/store', [SkinTypesController::class ,'store']);
Route::get('/create', function () {
    return view('create');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/login', function () {
    return view('login');
});
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

