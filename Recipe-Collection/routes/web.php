<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/recipes');

Route::resource('recipes', RecipeController::class);

Route::resource('register', RegisterController::class);
