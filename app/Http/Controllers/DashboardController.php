<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('users.dashboard');
    }

    public function profile() {
        return view('users.profile');
    }

    public function notifications() {
        return view('users.notifications');
    }

    public function twofa() {
        return view('2fa-auth');
    }

    public function failed() {
        return view('failed');
    }

    public function success() {
        return view('success');
    }
}
