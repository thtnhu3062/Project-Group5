<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\FE\CartController;
use App\Http\Controllers\FE\CheckoutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;




//frontend
Route::get('/', [HomeController::class, 'index'])->name('homeshop');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/category/{category_id}', [HomeController::class, 'showCategory'])->name('showCategory');
Route::get('/brand/{brand_id}', [HomeController::class, 'showBrand'])->name('showBrand');
Route::get('/details/{product_id}', [HomeController::class, 'detailsProduct'])->name('detailsProduct');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
//frontend-cart
Route::post('/update-quantity', [CartController::class, 'updateQuantity'])->name('updateQuantity');
Route::post('/save-cart', [CartController::class, 'saveCart'])->name('saveCart');
Route::get('/show-cart', [CartController::class, 'showCart'])->name('showCart');
Route::get('/delete-cart/{rowId}', [CartController::class, 'deleteCart'])->name('deleteCart');
//check-out
Route::get('/register', [CheckoutController::class, 'register'])->name('register');
Route::get('/login-checkout', [CheckoutController::class, 'loginCheckout'])->name('loginCheckout');
Route::get('/logout-checkout', [CheckoutController::class, 'logoutCheckout'])->name('logoutCheckout');
Route::post('/login-customer', [CheckoutController::class, 'loginCustomer'])->name('loginCustomer');
Route::post('/add-customer', [CheckoutController::class, 'addCustomer'])->name('addCustomer');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/save-checkout', [CheckoutController::class, 'saveCheckout'])->name('saveCheckout');

//backend
Route::get('/admin', [DashboardController::class, 'home'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
//Category
Route::get('/add-category-product', [CategoryController::class, 'addCategory'])->name('addCategory');
Route::get('/edit-category-product/{category_product_id}', [CategoryController::class, 'editCategory'])->name('editCategory');
Route::get('/delete-category-product/{category_product_id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
Route::get('/all-category-product', [CategoryController::class, 'allCategory'])->name('allCategory');
Route::get('/unactive-category-product/{category_product_id}', [CategoryController::class, 'unactiveCategory'])->name('unactiveCategory');
Route::get('/active-category-product/{category_product_id}', [CategoryController::class, 'activeCategory'])->name('activeCategory');
Route::post('/save-category-product', [CategoryController::class, 'saveCategory'])->name('saveCategory');
Route::post('/update-category-product/{category_product_id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
//Brand
Route::get('/add-brand-product', [BrandController::class, 'addBrand'])->name('addBrand');
Route::get('/edit-brand-product/{brand_product_id}', [BrandController::class, 'editBrand'])->name('editBrand');
Route::get('/delete-brand-product/{brand_product_id}', [BrandController::class, 'deleteBrand'])->name('deleteBrand');
Route::get('/all-brand-product', [BrandController::class, 'allBrand'])->name('allBrand');
Route::get('/unactive-brand-product/{brand_product_id}', [BrandController::class, 'unactiveBrand'])->name('unactiveBrand');
Route::get('/active-brand-product/{brand_product_id}', [BrandController::class, 'activeBrand'])->name('activeBrand');
Route::post('/save-brand-product', [BrandController::class, 'saveBrand'])->name('saveBrand');
Route::post('/update-brand-product/{brand_product_id}', [BrandController::class, 'updateBrand'])->name('updateBrand');
//product
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('addProduct');
Route::get('/edit-product/{product_id}', [ProductController::class, 'editProduct'])->name('editProduct');
Route::get('/delete-product/{product_id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/all-product', [ProductController::class, 'allProduct'])->name('allProduct');
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactiveProduct'])->name('unactiveProduct');
Route::get('/active-product/{product_id}', [ProductController::class, 'activeProduct'])->name('activeProduct');
Route::post('/save-product', [ProductController::class, 'saveProduct'])->name('saveProduct');
Route::post('/update-product/{product_id}', [ProductController::class, 'updateProduct'])->name('updateProduct');