<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SeatController;
use App\Models\Venue;
use App\Models\Event;

Route::get("/",[HomeController::class, 'home'])->name('home');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user_profile', function () {
    $events = Event::with(['venue', 'seats'])->get();

    return view('user_profile', compact('events'));
})->middleware(['auth'])->name('user.profile');

Route::get('/admin', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard', function () {
    if (auth()->user()->role !== 'admin') {
        abort(403);
    }

    $venues = Venue::all();
    $events = Event::with('venue')->get();

    return view('admin_dashboard', compact('venues', 'events'));
})->middleware('auth')->name('admin.dashboard');

Route::post('/venue', [VenueController::class, 'store'])
    ->middleware('auth')
    ->name('venue.store');

Route::post('/events', [EventController::class, 'store'])
    ->middleware('auth')
    ->name('events.store');

Route::post('/seats/generate', [SeatController::class, 'generate'])
    ->middleware('auth')
    ->name('seats.generate');

Route::post('/load-balance', [UserController::class, 'loadBalance'])->name('load.balance');

require __DIR__.'/auth.php';
