<?php

use Illuminate\Support\Facades\Route;

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

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'index_login'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);
    Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\GuestController::class, 'category']);
    Route::get('/detail-product', [App\Http\Controllers\GuestController::class, 'product']);
    Route::get('/blog', [App\Http\Controllers\GuestController::class, 'blog']);
    Route::get('/detail-blog', [App\Http\Controllers\GuestController::class, 'detailBlog']);
});
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);


Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'index_register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

    // Home and Resource Routes
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
