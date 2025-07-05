<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'index']);
Route::post('/login', [MainController::class, 'login']);
Route::post('/loginGoogle', [MainController::class, 'handleGoogleLogin']);
Route::get('/register', [MainController::class, 'register']);
Route::post('/register', [MainController::class, 'addUser']);
Route::get('/home', [MainController::class, 'home'])->name('home');