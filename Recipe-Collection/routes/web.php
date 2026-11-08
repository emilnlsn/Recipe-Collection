<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/recipes')->middleware('auth');

Route::resource('recipes', RecipeController::class)->middleware('auth');

Route::resource('register', RegisterController::class)->middleware('guest');

Route::resource('login', LoginController::class)->names(['index' => 'login',])->middleware('guest');
