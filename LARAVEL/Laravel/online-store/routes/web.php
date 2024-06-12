<?php

use Illuminate\Support\Facades\Route;
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
use App\Http\Controllers\Auth\LoginController;

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


use App\Http\Controllers\ProductController;

// Products Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
use App\Http\Controllers\CategoryController;

// Categories Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
use App\Http\Controllers\OrderController;

// Orders Routes
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
use App\Http\Controllers\OrderItemController;

// Order Items Routes
Route::get('/order-items', [OrderItemController::class, 'index'])->name('order-items.index');
Route::get('/order-items/create', [OrderItemController::class, 'create'])->name('order-items.create');
Route::post('/order-items', [OrderItemController::class, 'store'])->name('order-items.store');
Route::get('/order-items/{orderItem}', [OrderItemController::class, 'show'])->name('order-items.show');
Route::get('/order-items/{orderItem}/edit', [OrderItemController::class, 'edit'])->name('order-items.edit');
Route::put('/order-items/{orderItem}', [OrderItemController::class, 'update'])->name('order-items.update');
Route::delete('/order-items/{orderItem}', [OrderItemController::class, 'destroy'])->name('order-items.destroy');
use App\Http\Controllers\ImageController;

// Images Routes
Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::get('/images/create', [ImageController::class, 'create'])->name('images.create');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::get('/images/{image}', [ImageController::class, 'show'])->name('images.show');
Route::get('/images/{image}/edit', [ImageController::class, 'edit'])->name('images.edit');
Route::put('/images/{image}', [ImageController::class, 'update'])->name('images.update');
Route::delete('/images/{image}', [ImageController::class, 'destroy'])->name('images.destroy');



Route::get('/', function () {
    return view('welcome');
});
