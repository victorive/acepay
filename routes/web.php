<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\TwoFactorController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index')->name('home');

Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/forgotpassword', [ForgotPasswordController::class, 'index'])->name('forgotpassword');
    Route::post('/forgotpassword', [ForgotPasswordController::class, 'forgotPassword']);
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'changePasswordForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'updatePassword']);
});

Route::middleware(['auth', 'twofactor'])->group(function() {
    Route::get('/verify', [TwoFactorController::class, 'index'])->name('verify');
    Route::get('/verify/resend', [TwoFactorController::class, 'resendToken'])->name('verify.resend');
    Route::post('/verify', [TwoFactorController::class, 'verifyToken']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/notifications', 'notifications')->name('notifications');
        Route::get('/setings', 'settings')->name('settings');
        Route::put('/settings', 'updateProfile');
    });

    Route::post('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
    Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
});
