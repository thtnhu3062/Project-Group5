<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\FE\CartController;
use App\Http\Controllers\FE\ForgotPasswordController;
use App\Http\Controllers\FE\CheckoutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;





//frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/search', [HomeController::class, 'search'])->name('search');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/category/{category_id}', [HomeController::class, 'showCategory'])->name('showCategory');
Route::get('/brand/{brand_id}', [HomeController::class, 'showBrand'])->name('showBrand');
Route::get('/details/{product_id}', [HomeController::class, 'detailsProduct'])->name('detailsProduct');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog1', [HomeController::class, 'blog1'])->name('blog1');
Route::get('/blog3', [HomeController::class, 'blog3'])->name('blog3');
Route::get('/blog4', [HomeController::class, 'blog4'])->name('blog4');
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



Route::middleware(['checkcus'])->group(function () {
    Route::get('/payment', [CheckoutController::class, 'payment'])->name('payment');
    Route::post('/order-place', [CheckoutController::class, 'orderplace'])->name('orderplace');
    Route::post('/save-checkout', [CheckoutController::class, 'saveCheckout'])->name('saveCheckout');
    Route::post('/comfim-checkout', [CheckoutController::class, 'comfimOrder'])->name('comfimOrder');
});
//resset password
Route::get('/forget-password', [ForgotPasswordController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/update-email', [ForgotPasswordController::class, 'updateNewpass'])->name('updateNewpassget');
Route::post('/reset-pass', [ForgotPasswordController::class, 'resetPass'])->name('resetPass');
Route::post('/recover_password', [ForgotPasswordController::class, 'recoverPassword'])->name('recoverPassword'); 
//backend
Route::prefix('')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('index');
    Route::get('/dashboard/myprofile', [DashboardController::class])->name('myprofile');
    Route::post('/admin-dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::middleware(['checkadmin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('showDashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
        Route::get('/dashboard/myprofile', [DashboardController::class, 'profile'])->name('profile');
        Route::get('/dashboard/editprofile', [DashboardController::class, 'editprofile'])->name('editprofile');
        //Category
        Route::get('/add-category-product', [CategoryController::class, 'addCategory'])->name('addCategory');
        Route::get('/edit-category-product/{category_product_id}', [CategoryController::class, 'editCategory'])->name('editCategory');
        Route::get('/delete-category-product/{category_product_id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
        Route::get('/all-category-product', [CategoryController::class, 'allCategory'])->name('allCategory');
        Route::post('/save-category-product', [CategoryController::class, 'saveCategory'])->name('saveCategory');
        Route::post('/update-category-product/{category_product_id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
        //Brand
        Route::get('/add-brand-product', [BrandController::class, 'addBrand'])->name('addBrand');
        Route::get('/edit-brand-product/{brand_product_id}', [BrandController::class, 'editBrand'])->name('editBrand');
        Route::get('/delete-brand-product/{brand_product_id}', [BrandController::class, 'deleteBrand'])->name('deleteBrand');
        Route::get('/all-brand-product', [BrandController::class, 'allBrand'])->name('allBrand');
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
        //order
        Route::get('/view-cus', [ProductController::class, 'viewCustomer'])->name('viewCustomer');
        Route::get('/manager-order', [OrderController::class, 'managerOrder'])->name('managerOrder');
        Route::get('/view-order/{order_code}', [OrderController::class, 'viewOrder'])->name('viewOrder');
        Route::get('/delete-order/{order_code}', [OrderController::class, 'deleteOrder'])->name('deleteOrder');
        Route::get('/unactive-customer/{customer_id}', [OrderController::class, 'unactiveCustomer'])->name('unactiveProduct');
        Route::get('/active-customer/{customer_id}', [OrderController::class, 'activeCustomer'])->name('activeCustomer');
    });
});


