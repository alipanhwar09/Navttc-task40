<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('/about', [PostController::class, 'about'])->name('about');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');



Route::get('/', function () {
    return view('welcome');
});
