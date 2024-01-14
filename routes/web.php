<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;

use \App\Http\Controllers\PostController;

Route::get('/',[PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'search']);


//protecting this route using the guest midddleware
Route::get('/register',[RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class , 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
