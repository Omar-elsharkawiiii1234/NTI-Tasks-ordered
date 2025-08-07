<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
use App\Http\Controllers\ArticleController;

// Public routes - anyone can view articles (no login required)
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // List all articles

// Protected CRUD routes - only authenticated users can access
Route::middleware(['auth'])->group(function () {
    // Resource routes for articles (create, store, edit, update, destroy, show)
    // except(['index']) means skip index route (already defined above)
    Route::resource('articles', ArticleController::class)->except(['index']);
});
require __DIR__.'/auth.php';
