<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FE\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{slug}', [HomeController::class, 'productDetails'])

    ->name('productDetails');
    
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');

Route::get('/createAccount', [HomeController::class, 'createaccount'])->name('create');

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/product/{slug}', [HomeController::class, 'productDetails']);

Route::get('/admin', [DashboardController::class, 'home'])->name('admin');



