<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Home_back_end_Controller;
use App\Http\Controllers\Home_Font_End_Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
//Route::get('/home', [LoginController::class, 'store'])->name('admin.home');

Route::get('/register', [AuthController::class, 'register'])->name('admin.register');
Route::post('/register', [UserController::class, 'store'])->name('admin.store');
//backend
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');
Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/', [Home_back_end_Controller::class, 'showHome'])->name('admin.showHome');



    //Category
    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    });

//Brand
    Route::prefix('/brand')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('brand.index');
        Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('/create', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/{id}/delete', [BrandController::class, 'destroy'])->name('brand.destroy');
        Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
        Route::post('/{id}/update', [BrandController::class, 'update'])->name('brand.update');
    });

//product

    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/{id}/update', [ProductController::class, 'update'])->name('product.update');
    });

//customer
    Route::prefix('/customer')->group(function () {
        Route::get('/', [CustomersController::class, 'index'])->name('customer.index');
        Route::get('/create', [CustomersController::class, 'create'])->name('customer.create');
        Route::post('/create', [CustomersController::class, 'store'])->name('customer.store');
        Route::get('/{id}/delete', [CustomersController::class, 'destroy'])->name('customer.destroy');
        Route::get('/{id}/edit', [CustomersController::class, 'edit'])->name('customer.edit');
        Route::post('/{id}/update', [CustomersController::class, 'update'])->name('customer.update');
    });

});



