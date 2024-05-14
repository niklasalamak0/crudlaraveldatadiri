<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/crud', \App\Http\Controllers\PostController::class);

// Rute untuk membuat postingan baru
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Rute lainnya untuk PostController
Route::resource('posts', PostController::class);
