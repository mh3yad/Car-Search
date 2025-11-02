<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class, 'index']);

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::get('/car/{id}/images', [CarController::class, 'images'])->name('car.images');
Route::get('/car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
Route::resource("car", CarController::class);

Route::get("/login", [\App\Http\Controllers\LoginController::class, "create"])->name("login");
Route::get("/signup", [\App\Http\Controllers\SignupController::class, "create"])->name("signup");

