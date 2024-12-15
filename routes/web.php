<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductPictureController;
use App\Http\Controllers\ProductProductController;
use App\Http\Controllers\ProductCategoryController;

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
    Route::get('/checkout', [App\Http\Controllers\GuestController::class, 'checkout']);
});

Route::get('/admin/blog', [App\Http\Controllers\AdminController::class, 'blog']) ->name('blog');;
Route::get('/admin/blog-tag', [App\Http\Controllers\AdminController::class, 'tagBlog']) ->name('tagBlog');;



Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'index_register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
    // ===========================================================>
    Route::resource('product_products', ProductProductController::class);
    Route::resource('product_categories', ProductCategoryController::class);
    Route::resource('product_pictures', ProductPictureController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('tags', TagController::class);


    Route::get('/admin/product', [App\Http\Controllers\AdminController::class, 'product']) ->name('product');;
    Route::get('/admin/category-product', [App\Http\Controllers\AdminController::class, 'categoryProduct'])
    ->name('categoryProduct');;

    // Home and Resource Routes
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
