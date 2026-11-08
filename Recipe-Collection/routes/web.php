<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/recipes')->middleware('auth');

Route::resource('recipes', RecipeController::class)->middleware('auth');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index')->middleware('auth');
Route::post('/wishlist/{recipe}', [WishlistController::class, 'store'])->name('wishlist.store')->middleware('auth');
Route::delete('/wishlist/{recipe}', [WishlistController::class, 'destroy'])->name('wishlist.destroy')->middleware('auth');

Route::resource('register', RegisterController::class)->middleware('guest');

Route::resource('login', LoginController::class)->names(['index' => 'login'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');
