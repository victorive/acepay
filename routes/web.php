<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;

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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/forgotpassword', [LoginController::class, 'forgotpassword'])->name('forgotpassword');

Route::middleware(['auth'])->group(function() {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/notifications', 'notifications')->name('notifications');
        // Route::get('/2FA', 'twofa')->name('twofa');
        // Route::get('/failed', 'failed')->name('failed');
        // Route::get('/success', 'success')->name('success');
    });

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});

Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', 'index')->name('admin-dashboard');
    Route::get('/users', 'viewUsers')->name('view-users');
    Route::get('/deposits', 'viewDeposits')->name('view-deposits');
    Route::get('/withdrawals', 'viewWithdrawals')->name('view-withdrawals');
    Route::get('/received', 'viewReceived')->name('view-received');
    Route::get('/sent', 'viewSent')->name('view-sent');
    Route::get('/transactions', 'viewTransactions')->name('view-transactions');
    Route::get('/pushnotification', 'sendnotification')->name('send-notification');
    Route::get('/profile', 'adminprofile')->name('admin-profile');
    Route::get('/settings', 'adminsettings')->name('admin-settings');
    Route::get('/edituser', 'edituser')->name('edit-user');
});
