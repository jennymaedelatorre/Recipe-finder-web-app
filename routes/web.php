<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\LoginController;

Route::get('/', [RecipeController::class, 'index']);
Route::get('/recipes/{id}', [RecipeController::class, 'show']);
Route::post('/recipes', [RecipeController::class, 'store']);

Route::get('/login', function () {
    return view('login');
})->name('login');

// Process the login data
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');

Route::get('/app', function () {
    return view('layouts.app');  
})->name('app');

