<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        return view('admin.dashboard');
    }

    public function viewUsers () {
        return view('admin.users');
    }

    public function viewDeposits () {
        return view ('admin.deposits');
    }

    public function viewWithdrawals () {
        return view ('admin.withdrawals');
    }

    public function viewReceived () {
        return view ('admin.received');
    }

    public function viewSent () {
        return view ('admin.sent');
    }

    public function viewTransactions () {
        return view ('admin.transactions');
    }

    public function sendnotification() {
        return view('admin.pushnotification');
    }

    public function adminprofile() {
        return view('admin.profile');
    }

    public function adminsettings() {
        return view('admin.settings');
    }

    public function edituser() {
        return view('admin.edituser');
    }
}
