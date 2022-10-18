<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard', [
            'transactions' => Transaction::where('user_id', Auth::id())->latest()->get()
        ]);
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function notifications()
    {
        return view('user.notifications');
    }

    public function settings()
    {
        return view('user.settings');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|string'
        ]);

        if(!Hash::check($request->input('current_password'), Auth::user()->password)){

            return back()->withErrors('current_password', 'Current password incorrect, please try again!');
        }

        if(strcmp($request->input('current_password'), $request->input('new_password')) == 0){

            return back()->withErrors('new_password', 'New password cannot be the same with the current pasword!');
        }

        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->input('new_password'))
        ]);

        return back()->with('success', 'Password changed successfully!');
    }
}
