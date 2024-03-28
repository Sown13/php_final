<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    // Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'Auth\RegisterController@show')->name('register.show');
        Route::post('/register', 'Auth\RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');
        Route::get('/products/{product}', [ProductController::class, 'detail'])->name('products.product-detail');


        /**
         * Cart route
         */

        Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
        Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');
        
        // add to cart
        Route::post('/cart/{product_id}', [CartController::class, 'store'])->name('cart.store');

        Route::get('/cart/{cart}', [CartController::class, 'show'])->name('cart.show');
        Route::get('/cart/{cart}/edit', [CartController::class, 'edit'])->name('cart.edit');
        Route::put('/cart/{cart}', [CartController::class, 'update'])->name('cart.update');
        Route::delete('/cart/{productId}', [CartController::class, 'destroy'])->name('cart.destroy');
    });
});
