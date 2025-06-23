<?php

use App\Http\Controllers\Backend\AuthBController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashbaordController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\CategoryFController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\SellerController;
use App\Http\Controllers\Frontend\BuyerController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\BidController;
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

Route::get('welcome/', function () {
    return view('welcome');
});

Route::middleware(['auth', '2fa.verified'])->group(function () {
});


//2fa
Route::get('2fa/verify', [AuthController::class, 'verifyTwoFactor'])->name('2fa.verify');
Route::post('2fa/verify', [AuthController::class, 'postVerifyTwoFactor'])->name('2fa.verify.post');
Route::get('/2fa/enable', [AuthController::class, 'enableTwoFactorAuthentication'])->name('2fa.enable')->middleware('auth');


// frontend
Route::get('/', [IndexController::class, 'index']);

// product
Route::get('product', [ProductController::class, 'showProducts']);
Route::get('add-product', [ProductController::class, 'add_products']);
Route::get('product-detail/{id}', [ProductController::class, 'product_detail'])->name('product.detail');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');


// seller
Route::get('become-seller', [SellerController::class, 'become_seller']);
Route::get('sell', [SellerController::class, 'index']);
Route::post('sell-product', [SellerController::class, 'sell_product']);
Route::get('seller', [IndexController::class, 'sellerindex']);

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/edit-product/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('products/{product}/activate', [ProductController::class, 'activate'])->name('products.activate');
Route::post('products/{product}/deactivate', [ProductController::class, 'deactivate'])->name('products.deactivate');

Route::get('edit-profile', [SellerController::class, 'edit_profile']);
Route::post('update-profile', [SellerController::class, 'updateProfile'])->name('update-profile.post');

// bids
Route::post('/products/{productId}/bids', [BidController::class, 'store'])->name('bids.store');
Route::get('/products/{productId}/bids', [BidController::class, 'index'])->name('bids.index');



// become seller

// buyer
Route::get('become-buyer', [BuyerController::class, 'become_buyer']);
Route::get('buyer', [IndexController::class, 'buyerindex']);


//frontend Auth
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register']);
Route::Post('login_user', [AuthController::class, 'login_user']);
Route::Post('register_user', [AuthController::class, 'register_user']);
Route::post('register_seller', [AuthController::class, 'register_seller']);
Route::post('register_buyer', [AuthController::class, 'register_buyer']);
Route::get('logout', [AuthController::class, 'logout']);


Route::get('seller_profile/{business_username}', [IndexController::class, 'seller_profile'])->name('seller_profile');
Route::post('/rate-seller/{seller_id}', [RatingController::class, 'store'])->name('rate.seller');
// Frontend category
Route::get('category', [CategoryFController::class, 'index']);


Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');
Route::get('/resend-verification', [AuthController::class, 'resendVerificationEmail'])->name('verification.resend');

Route::post('/bids/{bid}/accept', [BidController::class, 'acceptBid'])->name('bids.accept');
Route::post('/bids/{bid}/reject', [BidController::class, 'rejectBid'])->name('bids.reject');


// backend auth
// Route::get('admin', [AuthBController::class, 'index'])->name('login');
// Route::get('register', [AuthBController::class, 'register']);
// Route::post('store', [AuthBController::class, 'store']);
Route::post('login', [AuthBController::class, 'login']);


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', [DashbaordController::class, 'index']);

    // Users
        // Customer
        Route::get('/users', [UsersController::class, 'index']);
        Route::get('block_customer/{id}', [UsersController::class, 'block_customer']);
        Route::get('unblock_customer/{id}', [UsersController::class, 'unblock_customer']);


          // category
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/storeCat', [CategoryController::class, 'storeCat']);
    Route::post('/edit_cat', [CategoryController::class, 'edit_cat']);
    Route::get('/delete_cat/{id}', [CategoryController::class, 'delete_cat']);
});





