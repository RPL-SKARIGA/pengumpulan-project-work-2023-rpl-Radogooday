<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Market/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Username must be filled!',
            'password.required' => 'Password must be filled!',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('market.index'))->with('loginSuccess', 'You are authenticated!');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('market.loginPage')->with('Logout', 'Your session ended!');
    }
}
