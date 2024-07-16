<?php

use App\Http\Controllers\Posts\CreatePostController;
use App\Http\Controllers\Posts\IndexPostController;
use App\Http\Controllers\Posts\StorePostController;
use App\Http\Controllers\posts\UpdatePostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',IndexPostController::class)->name('posts.index');
Route::get('/posts/create',CreatePostController::class)->name('posts.create');
Route::post('/posts/create',StorePostController::class)->name('posts.store');
Route::get('/posts/{post}/update',UpdatePostController::class)->name('posts.update');
// Route::get('/', function () {
//     return view('welcome');
// });
