<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get("/", [HomeController::class, 'index'])->name('home');

Route::get('key', [HomeController::class, 'key']);





require __DIR__.'/auth.php';
