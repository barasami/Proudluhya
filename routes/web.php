<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\postlikeController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'store']);
Route::delete('/home/{subtrib}', [HomeController::class, 'destroy'])->name('subtrib.destroy');
Route::get('/posts', [postsController::class, 'index'])->name('posts');
Route::post('/posts', [postsController::class, 'store']);
Route::delete('/posts/{post}', [postsController::class, 'destroy'])->name('posts.destroy');
Route::post('/posts/{post}/likes', [postlikeController::class, 'store'])->name('liky');
Route::delete('/posts/{post}/likes', [postlikeController::class, 'destroy'])->name('liky');

