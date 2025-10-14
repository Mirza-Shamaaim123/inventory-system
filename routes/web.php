<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/dashboard', [FrontendController::class, 'index'])->name('home');
Route::get('/product', [FrontendController::class, 'product'])->name('home.product');
Route::get('/add-product', [FrontendController::class, 'addproduct'])->name('add.product');
Route::get('/expired-product', [FrontendController::class, 'expiredproduct'])->name('expired.product');
Route::get('/stock', [FrontendController::class, 'stock'])->name('stock.page');
