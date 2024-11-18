<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrackingController;

// Route Company Profile
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/tentangkami', function () {
    return view('pages.about');
});
Route::get('/produk', function () {
    return view('pages.services');
});
Route::get('/hubungikami', [ContactController::class, 'index'])->name('hubungikami');
Route::post('/sendemail', [ContactController::class, 'sendEmail'])->name('sendEmail');
Route::get('/media', [MediaController::class, 'index'])->name('media');
Route::get('/cekresi', [TrackingController::class, 'index'])->name('cekresi');
Route::get('/track', [TrackingController::class, 'tracking']);

// Route Admin
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('item', ItemController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
