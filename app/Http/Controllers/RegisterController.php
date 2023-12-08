<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Market/register');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'email'     =>  'required|email',
            'name'  =>  'required|min:4|unique:users',
            'password'  =>  'required', 'min:6',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('market.loginPage')->with('accountCreated', 'Account created!');
    }
}
