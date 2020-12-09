<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Home_back_end_Controller;
use App\Http\Controllers\Home_Font_End_Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserCan;
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
//font end
Route::get('/', [Home_Font_End_Controller::class, 'index'])->name('home.index');
Route::get('/product', [Home_Font_End_Controller::class, 'product'])->name('home.product');
Route::get('/{id}/product-details', [Home_Font_End_Controller::class, 'product_details'])->name('home.product_details');


Route::get('/cart', [CartController::class, 'showCart'])->name('cart.showCart');
Route::get('/{id}/add-to-Cart', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::get('/{id}/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::post('/search',[Home_Font_End_Controller::class,'search'])->name('search');
Route::get('/{id}/show-category',[Home_Font_End_Controller::class,'searchCategory'])->name('searchCategory');



//Search
Route::get('/search',[SearchController::class,'searchAoVest'])->name('searchAoVest');
Route::get('/search-quan-jean',[SearchController::class,'searchQuanJean'])->name('searchQuanJean');
Route::get('/search-ao-so-mi',[SearchController::class,'searchAoSoMi'])->name('searchAoSoMi');

//CheckOut
Route::get('/login-check-out',[CheckOutController::class,'showCheckOut'])->name('showCheckOut');
Route::post('/add-customer',[CheckOutController::class,'add_Customer'])->name('add_Customer');
Route::get('/check-out',[CheckOutController::class,'checkOut'])->name('checkOut');
Route::post('/save-check-out',[CheckOutController::class,'save_checkOut'])->name('Save.checkOut');
Route::get('/payment',[CheckOutController::class,'payment'])->name('payment');
Route::get('/logout-checkout',[CheckOutController::class,'logout_checkOut'])->name('logout.checkOut');
Route::post('/login-checkout',[CheckOutController::class,'login_customer'])->name('login.customer');
Route::post('/order-place',[CheckOutController::class,'order_place'])->name('order_place');




//backend
Route::get('/register', [AuthController::class, 'register'])->name('admin.register');
Route::post('/register', [UserController::class, 'store'])->name('admin.store');
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');


Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/', [UserController::class, 'showPageAdmin'])->name('admin.showHome');

    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    });

    Route::prefix('/brand')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('brand.index');
        Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('/create', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/{id}/delete', [BrandController::class, 'destroy'])->name('brand.destroy');
        Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
        Route::post('/{id}/update', [BrandController::class, 'update'])->name('brand.update');
    });

    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/{id}/update', [ProductController::class, 'update'])->name('product.update');
    });

    Route::prefix('/customer')->group(function () {
        Route::get('/', [CustomersController::class, 'index'])->name('customer.index');
        Route::get('/create', [CustomersController::class, 'create'])->name('customer.create');
        Route::post('/create', [CustomersController::class, 'store'])->name('customer.store');
        Route::get('/{id}/delete', [CustomersController::class, 'destroy'])->name('customer.destroy');
        Route::get('/{id}/edit', [CustomersController::class, 'edit'])->name('customer.edit');
        Route::post('/{id}/update', [CustomersController::class, 'update'])->name('customer.update');
    });

    Route::prefix('/user')->group(function (){
        Route::get('/',[UserController::class,'index'])->name('user.index');
    });

    Route::get('/order',[OrderController::class,'index'])->name('order.manager');

});





