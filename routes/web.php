<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [AccountController::class, 'login'])->name('login');
Route::post('/logout', [AccountController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AccountController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::get('/profile', [AccountController::class, 'profile'])->name('account.profile');
Route::put('/profile/update', [AccountController::class, 'update'])->name('profile.update');
Route::post('/registration', [AccountController::class, 'registration'])->name('registration');
Route::get('/dashboard', [FrontendController::class, 'index'])->name('dashboard');
Route::get('/product', [FrontendController::class, 'product'])->name('home.product');
Route::get('/add-product', [FrontendController::class, 'addproduct'])->name('add.product');
Route::get('/expired-product', [FrontendController::class, 'expiredproduct'])->name('expired.product');
Route::get('/stock', [FrontendController::class, 'stock'])->name('stock.page');
Route::get('/manger', [FrontendController::class, 'manager'])->name('manger.dashboard');
Route::get('/saleman', [FrontendController::class, 'saleman'])->name('saleman.dashboard');
Route::get('/category', [FrontendController::class, 'category'])->name('home.category');
Route::get('/brand', [FrontendController::class, 'brand'])->name('home.brand');
Route::post('/brand/update', [BrandController::class, 'update'])->name('brand.update');
Route::delete('/brand/delete/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');

Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/unit', [FrontendController::class, 'unit'])->name('home.unit');

