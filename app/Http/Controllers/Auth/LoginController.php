<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserLogin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only(['email', 'password']), $request->remember)){

            return back()->with('failed', 'Incorrect login credentials, please try again!');
        }

        $user = Auth::user();

        $user->generateToken();
        event(new UserLogin($user));

        return redirect()->route('verify');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
