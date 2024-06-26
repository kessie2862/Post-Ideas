<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Whenever you get a request for the root URL ('/), Laravel will call the index method of the DashboardController class.
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');

Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');

Route::post('/ideas', [IdeaController::class, 'store'])->name('idea.store'); // Using named routes

Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comments.store');

Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
