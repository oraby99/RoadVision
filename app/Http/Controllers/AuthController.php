<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:5',
        ]);
        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if($is_login)
        {
            return redirect( route('dashboard') );
        }
        return back();

    }
    public function logout()
    {
        Auth::logout();
        return redirect( route('login') );

    }
}
