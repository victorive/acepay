<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingsController;
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

Route::get('/', function () {
    return view('index');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::get('/forgotpassword', 'forgotpassword')->name('forgotpassword');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/notifications', 'notifications')->name('notifications');
    Route::get('/2FA', 'twofa')->name('twofa');
    Route::get('/failed', 'failed')->name('failed');
    Route::get('/success', 'success')->name('success');
});

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/users', [AdminController::class, 'viewUsers'])->name('view-users');
    Route::get('/deposits', [AdminController::class, 'viewDeposits'])->name('view-deposits');
    Route::get('/withdrawals', [AdminController::class, 'viewWithdrawals'])->name('view-withdrawals');
    Route::get('/received', [AdminController::class, 'viewReceived'])->name('view-received');
    Route::get('/sent', [AdminController::class, 'viewSent'])->name('view-sent');
    Route::get('/transactions', [AdminController::class, 'viewTransactions'])->name('view-transactions');
    Route::get('/pushnotification', [AdminController::class, 'sendnotification'])->name('send-notification');
    Route::get('/profile', [AdminController::class, 'adminprofile'])->name('admin-profile');
    Route::get('/settings', [AdminController::class, 'adminsettings'])->name('admin-settings');
    Route::get('/edituser', [AdminController::class, 'edituser'])->name('edit-user');
});