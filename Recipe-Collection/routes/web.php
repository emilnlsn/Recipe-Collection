<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/recipes');

Route::resource('recipes', RecipeController::class);
