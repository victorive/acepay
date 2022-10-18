<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserLogin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TwoFactorController extends Controller
{

    public function index()
    {
        return view('auth.twofactor');
    }

    public function verifyToken(Request $request)
    {
        $this->validate($request, [
            'token' => 'required|integer'
        ]);

        $user = Auth::user();

        if(!$request->input('token') == $user->token){

            return back()->withErrors('token', 'The two-factor authentication code is incorrect, please try again!');
        }

        $user->resetToken();

        return redirect()->route('dashboard');
    }

    public function resendToken()
    {
        $user = Auth::user();

        $user->generateToken();
        event(new UserLogin($user));

        return back()->with('success', 'The verification code has been sent successfully!');
    }
}
