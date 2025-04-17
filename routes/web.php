<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AuthController;

// Authentication Routes
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Recipes
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::post('/add-favorite/{recipeId}', [RecipeController::class, 'addFavorite'])->name('addFavorite');

// 👇 Redirect /app to recipes.index after login
Route::middleware(['auth'])->group(function () {
    Route::get('/app', [RecipeController::class, 'index'])->name('app');
});
