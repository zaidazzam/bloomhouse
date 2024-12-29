<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostageRuleController;
use App\Http\Controllers\ProductPictureController;
use App\Http\Controllers\ProductProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\TransactionController;
use App\Models\PostageRule;

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
    Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'index_login'])->name('index_login');
    Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
    Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\GuestController::class, 'category'])->name('category');
    // Route::get('/detail-product', [App\Http\Controllers\GuestController::class, 'product'])->name('detail-product');
    Route::get('/blog', [App\Http\Controllers\GuestController::class, 'blog']);
    Route::get('/detail-blog', [App\Http\Controllers\GuestController::class, 'detailBlog']);
    Route::get('/checkout', [App\Http\Controllers\GuestController::class, 'checkout']);
    Route::get('/product/{id}', [GuestController::class, 'productShow1'])->name('product1.show');
    Route::post('/product-reviews', [ProductReviewController::class, 'store'])->name('product_reviews.store');
    Route::post('/track-view/{productId}', [ProductProductController::class, 'trackView']);
    Route::get('/category/filter', [ProductProductController::class, 'filter']);

    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transaction.add');
});

Route::get('/admin/blog', [App\Http\Controllers\AdminController::class, 'blog']) ->name('blog');;
Route::get('/admin/blog-tag', [App\Http\Controllers\AdminController::class, 'tagBlog']) ->name('tagBlog');;
Route::get('/admin/postages', [App\Http\Controllers\AdminController::class, 'delivery']) ->name('delivery');;



Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'index_register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    // ===========================================================>
    Route::resource('product_products', ProductProductController::class);
    Route::resource('product_categories', ProductCategoryController::class);
    Route::resource('product_pictures', ProductPictureController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('tags', TagController::class);
    Route::resource('postages', PostageRuleController::class);
    Route::put('/postages/{id}', [PostageRuleController::class, 'update'])->name('postages.update');

    Route::get('/admin/product', [App\Http\Controllers\AdminController::class, 'product']) ->name('product');;
    Route::get('/admin/report-ransaksi', [App\Http\Controllers\AdminController::class, 'reportTransaksi']) ->name('reportTransaksi');;
    Route::get('/admin/product-review', [App\Http\Controllers\AdminController::class, 'reportProductReview']) ->name('reportProductReview');;
    Route::get('/admin/category-product', [App\Http\Controllers\AdminController::class, 'categoryProduct'])
    ->name('categoryProduct');;

    // Home and Resource Routes
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
