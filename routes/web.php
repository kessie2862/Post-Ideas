<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Whenever you get a request for the root URL ('/), Laravel will call the index method of the DashboardController class.
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create'); // Using named routes

Route::get('/terms', function () {
    return view('terms');
});
