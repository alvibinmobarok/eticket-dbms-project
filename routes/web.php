<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiscountController;

Route::get("/",[HomeController::class, 'home'])->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/user_profile', [UserController::class, 'userProfile'])
    ->name('user.profile');

Route::get('/admin', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::post('/venue', [VenueController::class, 'store'])->name('venue.store');

Route::post('/events', [EventController::class, 'store'])->name('events.store');

Route::post('/seats/generate', [SeatController::class, 'generate'])->name('seats.generate');

Route::post('/load-balance', [UserController::class, 'loadBalance'])->name('load.balance');

Route::post('/cart/add', [UserController::class, 'addToCart'])
    ->name('cart.add');

Route::get('/checkout', [UserController::class, 'checkout'])
    ->name('checkout');

Route::post('/checkout/confirm', [UserController::class, 'confirmCheckout'])
    ->name('checkout.confirm');

Route::post('/cart/increase/{cart_id}', [UserController::class, 'increaseCart'])
    ->name('cart.increase');

Route::post('/cart/decrease/{cart_id}', [UserController::class, 'decreaseCart'])
    ->name('cart.decrease');

Route::post('/cart/remove/{cart_id}', [UserController::class, 'removeCart'])
    ->name('cart.remove');

Route::get('/venues', [VenueController::class, 'showVenues'])->name('venues');

Route::post('/submit-review', [UserController::class, 'submitReview'])
    ->name('submit.review');

Route::get('/venue-reviews/{venueId}', [UserController::class, 'showReviews'])->name('venue.reviews');

Route::post('/discount', [DiscountController::class, 'store'])
    ->name('discount.store');

Route::post('/discount/apply', [UserController::class, 'applyDiscount'])
    ->name('discount.apply');