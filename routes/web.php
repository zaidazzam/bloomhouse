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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TrackingDeliveryController;
use App\Models\PostageRule;
use App\Models\Transaction;

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
    // Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'index_login'])->name('index_login');
    Route::get('/login', [AuthController::class, 'index_login'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\GuestController::class, 'category'])->name('category');
    Route::get('/category-filtered', [App\Http\Controllers\GuestController::class, 'getProductWithCategory'])->name('getProductWithCategory');
    Route::post('/filter-product', [App\Http\Controllers\GuestController::class, 'filterProduct'])->name('filterProduct');
    // Route::get('/detail-product', [App\Http\Controllers\GuestController::class, 'product'])->name('detail-product');
    Route::get('/blog', [App\Http\Controllers\GuestController::class, 'blog']);
    Route::get('/detail-blog/{id}', [GuestController::class, 'detailBlog'])->name('detail-blog');
    Route::get('/checkout', [App\Http\Controllers\GuestController::class, 'checkout'])->name('checkout');
    Route::get('/product/{id}', [GuestController::class, 'productShow1'])->name('product1.show');
    Route::post('/product-reviews', [ProductReviewController::class, 'store'])->name('product_reviews.store');
    Route::post('/track-view/{productId}', [ProductProductController::class, 'trackView']);
    Route::get('/category/filter', [ProductProductController::class, 'filter']);
    Route::get('/invoice/{id}', [GuestController::class, 'invoice'])->name('invoice');

    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transaction.add');
    // order via paypal
    Route::post('/prosses-paypal', [TransactionController::class, 'processPaypal'])->name('paypal.createPayment');
    Route::get('/prosses-paypal-success', [TransactionController::class, 'processSuccess'])->name('paypal.processSuccess');
    Route::get('/prosses-paypal-cancel', [TransactionController::class, 'processCancel'])->name('paypal.processCancel');
    Route::get('/paypal/capture-payment', [TransactionController::class, 'capturePaymentPaypal'])->name('paypal.capturePayment');
    Route::get('/callback', [TransactionController::class, 'callback'])->name('transaction.callback');

    Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'index_register'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register']);
    Route::get('/search', [GuestController::class, 'search'])->name('search');
    // tes login odoo
    Route::get('/tes-login-odoo', [GuestController::class, 'odoo'])->name('tes-login-odoo');
});






Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    // ===========================================================>
    Route::get('/admin/blog', [App\Http\Controllers\AdminController::class, 'blog'])->name('blog');;
    Route::get('/admin/blog-tag', [App\Http\Controllers\AdminController::class, 'tagBlog'])->name('tagBlog');;
    Route::get('/admin/postages', [App\Http\Controllers\AdminController::class, 'delivery'])->name('delivery');;
    Route::resource('/admin/tracking', TrackingDeliveryController::class);
    Route::get('/admin/tracking-accepted', [App\Http\Controllers\TrackingDeliveryController::class, 'accepted'])->name('accepted');;

    // Route::get('/admin/tracking-accepted', TrackingDeliveryController::class);
    Route::resource('product_products', ProductProductController::class);
    Route::resource('product_categories', ProductCategoryController::class);
    Route::resource('product_pictures', ProductPictureController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('tags', TagController::class);
    Route::resource('postages', PostageRuleController::class);
    Route::put('/postages/{id}', [PostageRuleController::class, 'update'])->name('postages.update');
    // Route::get('/report-transactions', [TransactionController::class,'index'])->name('report_transactions');
    Route::get('/admin/invoice-paid', [AdminController::class, 'adminInvoicePaid'])->name('adminInvoicePaid');
    Route::get('/admin/invoice-pending', [AdminController::class, 'adminInvoicePending'])->name('adminInvoicePending');
    Route::get('/admin/invoice/{id}', [AdminController::class, 'detailInvoice'])->name('detailInvoice');
    Route::get('/admin/product/{id}', [ProductProductController::class, 'detailProduct'])->name('detailProduct');
    Route::get('/admin/report-ransaksi', [AdminController::class, 'reportTransaksi'])->name('reportTransaksi');;
    Route::get('/admin/sales-item', [AdminController::class, 'salesItem'])->name('salesItem');;
    Route::get('/admin/sales-category', [AdminController::class, 'salesCategory'])->name('salesCategory');;

    Route::get('/admin/product', [App\Http\Controllers\AdminController::class, 'product'])->name('product');;
    Route::get('/admin/product-review', [App\Http\Controllers\AdminController::class, 'reportProductReview'])->name('reportProductReview');;
    Route::get('/admin/category-product', [App\Http\Controllers\AdminController::class, 'categoryProduct'])
        ->name('categoryProduct');;

    // Home and Resource Routes
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
